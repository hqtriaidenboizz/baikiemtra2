<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Restaurant;



class homeController extends Controller
{
        public function getHome(){
            return view("home", ["restaurantList" => Restaurant::all()]);
        }
        public function getForm(){
            return view('page.form');
        }
        // public function getDetail(){
        //     return view('detail');
        // }
        public function index()
    {
    }
        public function getDetail(Request $request){
            $sanpham = Restaurant::where('id',$request->id)->first();
            return view('detail',compact('sanpham'));
        }
    
}
