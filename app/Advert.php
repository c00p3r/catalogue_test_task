<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

/**
 * Class Advert
 * @package App
 */
class Advert extends Model
{
    /**
     * list of available filters
     */
    const FILTERS = [
        'title', 'region', 'city', 'manufacturer', 'model', 'engine_min', 'engine_max', 'mileage_min', 'mileage_max', 'owners_min', 'owners_max',
    ];
    /**
     * list of model fields that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'region', 'city', 'manufacturer', 'model', 'engine', 'mileage', 'owners',
    ];
    /**
     * list of model fields that are displayed to user
     *
     * @var array
     */
    protected $display_list = [
        'title', 'region', 'city', 'manufacturer', 'model', 'engine', 'mileage', 'owners',
    ];

    protected static function boot()
    {
        parent::boot();

        // before delete() method call this
        static::deleting(function ($advert) {
            unlink('./public/' . $advert->picture);
        });
    }

    /**
     * Defines DB relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Saves advert picture to unique directory
     * convention is: <upload_folder>/<user_folder>/<advert_folder>/
     *
     * @param UploadedFile $file
     * @return bool|string
     */
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

    /**
     * Model accessor for picture field
     * Checks if picture exists else returns dummy picture
     *
     * @param $value
     * @return string
     */
    public function getPictureAttribute($value)
    {
        if (file_exists($value)) {
            return $value;
        }

        return '/img/no_image.png';
    }
}

