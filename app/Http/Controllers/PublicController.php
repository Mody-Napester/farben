<?php

namespace App\Http\Controllers;

use App\About;
use App\Blog;
use App\Branch;
use App\Brand;
use App\HomeSetting;
use App\News;
use App\Offer;
use App\Product;
use App\Slider;
use App\Testimonial;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Home
    public function home(){
        $data['sliders'] = Slider::all();
        $data['products'] = Product::orderBy('ordering', 'DESC')->get();
        return view('@public.home', $data);
    }

    // About
    public function about(){
        $data['abouts'] = About::all();
        return view('@public.about', $data);
    }

    // Products
    public function products(){
        $data['products'] = Product::orderBy('ordering', 'DESC')->get();
        return view('@public.products', $data);
    }

    // Product
    public function product($id){
        $data['products'] = Product::orderBy('ordering', 'DESC')->get();
        $data['product'] = Product::where('id', $id)->first();
        if($data['product']){
            return view('@public.product', $data);
        }else{
            return redirect('/');
        }
    }

    // Contact
    public function contact(){
        return view('@public.contact');
    }
}
