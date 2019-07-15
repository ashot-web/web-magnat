<?php

namespace App\Http\Controllers;

use App\AboutOffice;
use Illuminate\Http\Request;

class AboutOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about_offices = AboutOffice::Paginate(20);
        return view('admin.view.office.about_office', compact('about_offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.view.office.about_office_add');
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
        $about_office = new AboutOffice();
        $about_office->fill($request->toArray());
        $about_office->save();
        $about_offices = AboutOffice::Paginate(20);
        return view('admin.view.office.about_office', compact('about_offices'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutOffice  $aboutOffice
     * @return \Illuminate\Http\Response
     */
    public function show(AboutOffice $aboutOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutOffice  $aboutOffice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $about_offices=AboutOffice::find($id);
        return view('admin.view.office.about_office_edit', compact('about_offices'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutOffice  $aboutOffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutOffice $aboutOffice)
    {
        //
        $aboutOffice->fill($request->toArray());
        $aboutOffice->save();
        $about_offices = AboutOffice::Paginate(20);
        return view('admin.view.office.office_images_list', compact('about_offices'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutOffice  $aboutOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutOffice $aboutOffice)
    {
        //
        $aboutOffice->delete();
        $about_offices = AboutOffice::Paginate(20);
        return view('admin.view.office.about_office', compact('about_offices'));
    }
}
