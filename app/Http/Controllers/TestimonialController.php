<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return String
     */
    public function index(){
        $data['resources'] = Testimonial::all();
        return view('@dashboard.testimonial.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return String
     */
    public function create()
    {
        return view('@dashboard.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return String
     */
    public function store(Request $request)
    {
        // Validation
        $rules = [
            'image' => 'required',
        ];

        foreach (config('vars.langs') as $lang) {
            $rules['name_' . $lang] = 'required';
            $rules['role_' . $lang] = 'required';
            $rules['details_' . $lang] = 'required';
        }

        $request->validate($rules);

        // Code
        $name = [];
        $role = [];
        $details = [];

        foreach (config('vars.langs') as $lang) {
            $name[$lang] = $request->input('name_' . $lang);
            $role[$lang] = $request->input('role_' . $lang);
            $details[$lang] = $request->input('details_' . $lang);
        }

        if($request->hasFile('image')){
            $upload = upload_file('image', $request->file('image'), 'assets_public/images/testimonial');
            if ($upload['status'] == true){
                $image = $upload['filename'];
            }else{
                return back()->with('message',[
                    'type'=> 'danger',
                    'text'=> 'Image ' . $upload['message']
                ]);
            }
        }

        $resource = Testimonial::create([
            'name' => json_encode($name),
            'role' => json_encode($role),
            'details' => json_encode($details),
            'image' => $image,
        ]);

        // Return
        if($resource){
            return redirect(route('testimonial.index'))->with('message', [
                'type' => 'success',
                'text' => 'Created successfully'
            ]);
        }else{
            return back()->with('message', [
                'type' => 'error',
                'text' => 'Error!, Please try again.'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $data['resource'] = $testimonial;
        return view('@dashboard.testimonial.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return String
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $data['resource'] = $testimonial;

        // Return
        if(!$data['resource']){
            return redirect()->back()->with('message',[
                'type'=>'danger',
                'text'=>'Sorry! page not exists.'
            ]);
        }

        // Validation
        $rules = [
//            'image' => 'required',
        ];

        foreach (config('vars.langs') as $lang) {
            $rules['name_' . $lang] = 'required';
            $rules['role_' . $lang] = 'required';
            $rules['details_' . $lang] = 'required';
        }

        $request->validate($rules);

        // Code
        $name = [];
        $role = [];
        $details = [];

        foreach (config('vars.langs') as $lang) {
            $name[$lang] = $request->input('name_' . $lang);
            $role[$lang] = $request->input('role_' . $lang);
            $details[$lang] = $request->input('details_' . $lang);
        }

        if($request->hasFile('image')){
            $upload = upload_file('image', $request->file('image'), 'assets_public/images/testimonial');
            if ($upload['status'] == true){
                $image = $upload['filename'];
            }else{
                return back()->with('message',[
                    'type'=> 'danger',
                    'text'=> 'Image ' . $upload['message']
                ]);
            }
        }

        $resource = $data['resource']->update([
            'name' => json_encode($name),
            'role' => json_encode($role),
            'details' => json_encode($details),
            'image' => (isset($image)? $image : $data['resource']->image),
        ]);

        // Return
        if($resource){
            return redirect(route('testimonial.index'))->with('message', [
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return String
     */
    public function destroy(Testimonial $testimonial)
    {
        $data['resource'] = $testimonial;

        if($data['resource']){
            $data['resource']->delete();

            return redirect()->back()->with('message',[
                'type'=>'success',
                'text'=>'Deleted Successfully.'
            ]);
        }else{
            return redirect()->back()->with('message',[
                'type'=>'danger',
                'text'=>'Sorry! not exists.'
            ]);
        }
    }
}
