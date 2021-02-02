<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.admin');
    }
    public function showAdmin()
    {
        $product= Project::all();
        return view('user.admin')->with('posts',$product);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function displayEdit($id)
    {
        $edit= Project::find($id);
        // $store->image_path = json_encode($datas)
        return view('user.edit')->with('posts', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updated(Request $request, $id)
    {
        $image= $request->image->getClientOriginalExtension();
        $imageName= time().'.'.$image;
        $request->image->move(public_path('images'),$imageName);

        $store=Project::find($id);
        $store->product=$request->input('name');
        $store->description =$request->input('description');
        $store->imageFile= json_encode($imageName);
        $store->save();

        return redirect()->route('display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= Project::find($id);
        $item->delete();
        return back();
    }
}
