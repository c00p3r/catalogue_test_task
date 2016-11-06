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
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data  = $request->all();
            $query = Advert::query();

            foreach ($data as $key => $value) {
                if ($value && ! empty($value) && in_array($key, Advert::FILTERS)) {
                    $query->where($key, 'like', '%' . $value . '%');
                }
            }

            $adverts = $query->orderBy('id', 'desc')->paginate(10);

            return view('adverts._advert_list', compact('adverts'))->render();
        }
        $adverts = Advert::orderBy('id', 'desc')->paginate(10);

        $regions = Advert::select('region')->groupBy('region')->get()->toArray();

        $cities = Advert::select('city')->groupBy('city')->get()->toArray();

        function prepare_data($arr, $col_name)
        {
            $result = [0 => ['id' => '', 'text' => '']];
            foreach ($arr as $key => $value) {
                $key++;
                $result[ $key ]['id']   = $value[ $col_name ];
                $result[ $key ]['text'] = $value[ $col_name ];
            }

            return json_encode($result);
        }

        $regions = prepare_data($regions, 'region');

        $cities = prepare_data($cities, 'city');

        return view('homepage', compact('adverts', 'regions', 'cities'));
    }

    /**
     * Returns a view with form for adding new advert
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
//        check if user don't have 3 adverts already
        $adverts_count = Advert::where('user_id', Auth::id())->count();

        if ($adverts_count > 3) {
            Session::flash('flash_type', 'danger');
            Session::flash('flash_msg', 'Sorry, you can\'t create more than 3 adverts :(');

            return redirect('/');
        }

        return view('adverts.advert_create');
    }


    public function add(Request $request)
    {
//        trimming inputs
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

//        setting foreign key
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
