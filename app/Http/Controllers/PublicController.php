<?php

namespace App\Http\Controllers;

use App\About;
use App\Message;
use App\Product;
use App\Slider;
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
    public function products($category_id = null){
        if(is_null($category_id)){
            $data['categories'] = \App\Category::orderBy('ordering', 'ASC')->get();
            $data['products'] = Product::orderBy('ordering', 'DESC')->get();
        }else{
            $data['categories'] = \App\Category::orderBy('ordering', 'ASC')->where('id', $category_id)->get();
        }
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

    // Post Product
    public function postProduct(Request $request, $id){
        $data['product'] = Product::where('id', $id)->first();

        if($data['product']){
            // Validation
            $rules = [
                'name' => 'required|string|max:100',
                'phone' => 'required|numeric|max:30',
                'message' => 'required',
            ];

            $request->validate($rules);

            $resource = Message::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'message' => $request->message,
                'product_id' => $data['product']->id,
            ]);

            // Send Emails
            $name = "<b>Name : </b>" . $request->name . "<br>";
            $phone = "<b>Phone : </b>" . $request->phone . "<br>";
            $message = "<b>Message : </b> : " . ($request->has('message'))? $request->message : '' . "<br>";

            $mail = $name . $phone . $message;

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $to = trans('send_mails.to') ;
            $subject = ($request->has('subject'))? $request->subject : 'Message From website';

            $sendMail = mail($to, $subject, $mail, $headers);

            // Return
            if($resource){
                return back()->with('message', [
                    'type' => 'success',
                    'text' => trans('messages.sent_successfully')
                ]);
            }else{
                return back()->with('message', [
                    'type' => 'danger',
                    'text' => trans('messages.Error_Please_try_again')
                ]);
            }
        }else{
            return back()->with('message', [
                'type' => 'danger',
                'text' => trans('messages.Error_Please_try_again')
            ]);
        }
    }

    // Contact
    public function contact(){
        return view('@public.contact');
    }

    // Post Contact
    public function postContact(Request $request){

        // Validation
        $rules = [
            'name' => 'required|string|max:100',
            'phone' => 'required|numeric|max:30',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:100',
            'message' => 'required',
        ];

        $request->validate($rules);

        $resource = Message::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Send Emails
        $name = "<b>Name : </b>" . $request->name . "<br>";
        $phone = "<b>Phone : </b>" . $request->phone . "<br>";
        $email = "<b>Email : </b>" . $request->email . "<br>";
        $subject = "<b>Subject : </b>" . $request->subject . "<br>";
        $message = "<b>Message : </b> : " . ($request->has('message'))? $request->message : '' . "<br>";

        $mail = $name . $phone . $email . $subject . $message;

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $to = trans('send_mails.to') ;
        $subject = ($request->has('subject'))? $request->subject : 'Message From website';

        $sendMail = mail($to, $subject, $mail, $headers);

        // Return
        if($resource){
            return back()->with('message', [
                'type' => 'success',
                'text' => trans('messages.sent_successfully')
            ]);
        }else{
            return back()->with('message', [
                'type' => 'danger',
                'text' => trans('messages.Error_Please_try_again')
            ]);
        }
    }
}
