<?php

namespace App\Http\Controllers;

use App\Advert;
use Auth;
use Illuminate\Http\Request;
use Session;

/**
 * Class AdvertController
 * @package App\Http\Controllers
 */
class AdvertController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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


    public function add(Request $request)
    {
        $request->merge(array_map('trim', $request->all()));

        $data = $request->all();

        $this->validate($request, array(
            'title'        => 'required|max:70',
            'region'       => 'required|max:70',
            'city'         => 'required|max:70',
            'manufacturer' => 'required|max:70',
            'model'        => 'required|max:70',
            'engine'       => 'required|max:70',
            'mileage'      => 'required|max:70',
            'owners'       => 'required|max:70',
            'picture'      => 'required|image|max:5125',
        ));

        $data['user_id'] = Auth::id();

        $advert = Advert::create($data);

        $pic_name = $advert->savePicture($request->file('picture'));
        if ($pic_name) {
            $advert->picture = $pic_name;
            $advert->save();
        }

        Session::flash('flash_msg', 'Advert created successfully');
        Session::flash('flash_msg_type', 'success');

        return redirect('/');
    }
}
