<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected static function boot()
    {
        parent::boot();

        // before delete() method call this
        static::deleting(function ($advert) {
            unlink('./public/' . $advert->picture);
        });
    }

//    public function savePicture(UploadedFile $file)
//    {
//        $uploads_path = config('app.upload_path');
//        $user_folder = 'u_' . Auth::user()->id;
//        $advert_folder = 'adv_' . $this->id;
//
//        $pic_path = $uploads_path . '/' . $user_folder . '/' . $advert_folder;
//
//        if (!file_exists($pic_path)) {
//            mkdir($pic_path, 0777, true);
//        }
//
//        $pic_name = rand(10) . '.jpg';
//
//        if ($file->move($pic_path, $pic_name)) {
//            return $pic_name;
//        };
//        return false;
//    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

