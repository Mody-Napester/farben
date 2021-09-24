<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return String
     */
    public function index(){
        $data['resources'] = Category::orderBy('ordering', 'ASC')->get();
        return view('@dashboard.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return String
     */
    public function create()
    {
        return view('@dashboard.category.create');
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
        ];

        foreach (config('vars.langs') as $lang) {
            $rules['title_' . $lang] = 'required';
        }

        $request->validate($rules);

        // Code
        $title = [];

        foreach (config('vars.langs') as $lang) {
            $title[$lang] = $request->input('title_' . $lang);
        }

        $resource = Category::create([
            'ordering' => $request->ordering,
            'title' => json_encode($title),
        ]);

        // Return
        if($resource){
            return redirect(route('category.index'))->with('message', [
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data['resource'] = $category;
        return view('@dashboard.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return String
     */
    public function update(Request $request, Category $category)
    {
        $data['resource'] = $category;

        // Return
        if(!$data['resource']){
            return redirect()->back()->with('message',[
                'type'=>'danger',
                'text'=>'Sorry! page not exists.'
            ]);
        }

        // Validation
        $rules = [
        ];

        foreach (config('vars.langs') as $lang) {
            $rules['title_' . $lang] = 'required';
        }

        $request->validate($rules);

        // Code
        $title = [];

        foreach (config('vars.langs') as $lang) {
            $title[$lang] = $request->input('title_' . $lang);
        }

        $resource = $data['resource']->update([
            'ordering' => $request->ordering,
            'title' => json_encode($title),
        ]);

        // Return
        if($resource){
            return redirect(route('category.index'))->with('message', [
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
     * @param  \App\Category  $category
     * @return String
     */
    public function destroy(Category $category)
    {
        $data['resource'] = $category;

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
