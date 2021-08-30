<?php

namespace App\Http\Controllers;

use App\HomeSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getSettings()
    {
        $data['resource'] = HomeSetting::find(1);
        return view('@dashboard.home_setting.edit', $data);
    }

    public function postSettings(Request $request)
    {
        $data['resource'] = HomeSetting::find(1);

        // Return
        if(!$data['resource']){
            return redirect()->back()->with('message',[
                'type'=>'danger',
                'text'=>'Sorry! page not exists.'
            ]);
        }

        // Validation
        $rules = [
            'hearing_test_link' => 'required',
//            'success_image' => 'required',
//            'section_image' => 'required',
        ];

        foreach (config('vars.langs') as $lang) {
            $rules['about_text_' . $lang] = 'required';
            $rules['section_title_' . $lang] = 'required';
            $rules['section_details_' . $lang] = 'required';
        }

        $request->validate($rules);

        // Code
        $about_text = [];
        $section_title = [];
        $section_details = [];

        foreach (config('vars.langs') as $lang) {
            $about_text[$lang] = $request->input('about_text_' . $lang);
            $section_title[$lang] = $request->input('section_title_' . $lang);
            $section_details[$lang] = $request->input('section_details_' . $lang);
        }

        if($request->hasFile('success_image')){
            $upload = upload_file('image', $request->file('success_image'), 'assets_public/images/home');
            if ($upload['status'] == true){
                $success_image = $upload['filename'];
            }else{
                return back()->with('message',[
                    'type'=> 'danger',
                    'text'=> 'Image ' . $upload['message']
                ]);
            }
        }

        if($request->hasFile('section_image')){
            $upload = upload_file('image', $request->file('section_image'), 'assets_public/images/home');
            if ($upload['status'] == true){
                $section_image = $upload['filename'];
            }else{
                return back()->with('message',[
                    'type'=> 'danger',
                    'text'=> 'Image ' . $upload['message']
                ]);
            }
        }

        $resource = $data['resource']->update([
            'hearing_test_link' => ($request->has('hearing_test_link'))? $request->input('hearing_test_link') : $data['resource']->hearing_test_link,
            'about_text' => json_encode($about_text),
            'section_title' => json_encode($section_title),
            'section_details' => json_encode($section_details),
            'success_image' => (isset($success_image)? $success_image : $data['resource']->success_image),
            'section_image' => (isset($section_image)? $section_image : $data['resource']->section_image),
        ]);

        // Return
        if($resource){
            return back()->with('message', [
                'type' => 'success',
                'text' => 'Updated successfully'
            ]);
        }else{
            return back()->with('message', [
                'type' => 'error',
                'text' => 'Error!, Please try again.'
            ]);
        }
    }
}
