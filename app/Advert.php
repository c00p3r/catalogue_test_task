<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Advert extends Model
{
    protected $fillable = [
        'user_id', 'title', 'region', 'city', 'manufacturer', 'model', 'engine', 'mileage', 'owners',
    ];

    protected static function boot()
    {
        parent::boot();

        // before delete() method call this
        static::deleting(function ($advert) {
            unlink('./public/' . $advert->picture);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function savePicture(UploadedFile $file)
    {
        $uploads_path  = config('app.upload_path');
        $user_folder   = 'u_' . Auth::id();
        $advert_folder = 'adv_' . $this->id;

        $pic_path = $uploads_path . '/' . $user_folder . '/' . $advert_folder;

        if ( ! file_exists($pic_path)) {
            mkdir($pic_path, 0777, true);
        }

        $pic_name = uniqid('', true) . '.jpg';

        if ($file->move($pic_path, $pic_name)) {
            return $pic_path . '/' . $pic_name;
        };

        return false;
    }

//    public function getPictureAttribute($value)
//    {
//        if (file_exists($value)) {
//            return $value;
//        }
//        return config('app.upload_path') . '/no_image.png';
//    }
}

