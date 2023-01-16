<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('dashboard.activity.activity', [
            "title" => "News",
            "activities" => Activity::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.activity.create', [
            "title" => "Create",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namakeg' => 'required|max:200',
            'tgl' => 'required|date',
            'tempat' => 'required|max:255',
            'PJ' => 'required|max:200',
            'biaya' => 'required|numeric',
        ]);

        //aksi masuk cuy
        $validatedData ['id'] = auth()->user()->id;

        Activity::create($validatedData);
        return redirect('/dashboard/news')->with('success','Data Sukses Ditambahkan');
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
    public function edit(Activity $news)
    {
        return view('dashboard.activity.edit', [
            'activity' => $news,
            "title" => "Edit",
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $news)
    {
        $validatedData = $request->validate([
            'namakeg' => 'required|max:200',
            'tgl' => 'required|date',
            'tempat' => 'required|max:255',
            'PJ' => 'required|max:200',
            'biaya' => 'required|numeric',
        ]);
        //aksi masuk cuy
        $validatedData ['id'] = auth()->user()->id;

        Activity::where('id',$news->id)->update($validatedData);
        return redirect('/dashboard/news')->with('success','Data Sukses Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $news)
    {
        Activity::destroy($news->id);
        return redirect('/dashboard/news')->with('success','Data Sukses Dibunuh');
    }
}
