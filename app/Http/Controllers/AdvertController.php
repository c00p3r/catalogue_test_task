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
        $adverts = Advert::orderBy('id', 'desc')->get();

        return view('homepage', compact('adverts'));
    }

    public function create()
    {
        $adverts_count = Advert::where('user_id', Auth::id())->count();

        $is_create_allowed = true;
        if ($adverts_count > 2) {
            $is_create_allowed = false;
        }

        return view('adverts.advert_create', compact('is_create_allowed'));
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

        $adverts_count = Advert::where('user_id', Auth::id())->count();

        if ($adverts_count > 3) {
            Session::flash('flash_msg', '');
            Session::flash('flash_msg_type', 'error');

            return redirect('/');
        }
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

    public function filter(Request $request)
    {
        if ( ! $request->ajax()) {
            abort(403);
        }
        $data = $request->all();

        $query = Advert::query();

        foreach ($data as $key => $value) {
            if ($value && ! empty($value) && in_array($key, Advert::FILTERS)) {
                $query->where($key, 'like', '%' . $value . '%');
            }
        }

        $adverts = $query->orderBy('id', 'desc')->get();


//        Advert::where()->get();
        return view('adverts._advert_list', compact('adverts'));
    }
}
