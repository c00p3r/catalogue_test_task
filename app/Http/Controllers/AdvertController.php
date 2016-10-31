<?php

namespace App\Http\Controllers;

use App\Advert;
use Illuminate\Support\Facades\Input;

class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Advert::all();

        return view('homepage', compact('adverts'));
    }

    public function create()
    {
        $advert = new Advert;

        return view('advert_create', compact('advert'));
    }

    public function add()
    {
        $advert = new Advert;

        $pic_name = $advert->savePicture(Input::file('picture'));

        //getting article article
        $data = array(
            'title'   => Input::get('title'),
            'content' => Input::get('content'),
            'picture' => $pic_name,
        );
    }
}
