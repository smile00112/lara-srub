<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\house;
use App\Models\category;

class StoreController extends Controller
{
    public function index(){

        $houses = house::paginate(4);
        $categories = category::orderBy('title')->get();
        $data = [
            'houses' => $houses,
            'categories' => $categories,
        ];
        return view('pages.index', $data);
    }

    public function getHousesByCategory($slug){
        $current_category = category::where('slug', $slug)->first();
        if(empty($current_category)) return 404;

        //$houses = house::where('category_id', $current_category->id )->orderBy('title')->get();
        $houses = $current_category->houses()->paginate(4);
        // echo '<pre>';
        // print_r($current_category);
        $categories = category::orderBy('title')->get();
        $data = [
            'category_info' => $current_category,
            'houses' => $houses,
            'categories' => $categories,
        ];
        return view('pages.category', $data);
    }

    public function getHouse($slug_category, $slug_house){
        $parent_category = category::where('slug', $slug_category)->first();
        $current_house = house::where('slug', $slug_house)->first();

        if(empty($current_house)) return 404;

        // echo '<pre>';
        // print_r($parent_category);

       // $categories = category::orderBy('title')->get();
        $data = [
            'house_info' => $current_house,
            'parent_category' => $parent_category,
        //    'categories' => $categories,
        ];
        return view('pages.single_house', $data);
    }
}
