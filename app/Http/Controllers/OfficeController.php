<?php

namespace App\Http\Controllers;

use App\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $offices = Office::Paginate(20);
        return view('admin.view.office.office_images_list', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.view.office.office_images_add');

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
        if ($request->hasFile('image')) {
            $image = $request->image;
            $destinationPath = 'uploads/office';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);

        }
        $office = new Office();
        $office->fill($request->toArray());
        $office->photo = $fileName;
        $office->save();
        $offices = Office::Paginate(20);
        return view('admin.view.office.office_images_list', compact('offices'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(Office $office)
    {
        //
        return view('admin.view.office.office_images_edit', compact('office'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Office $office)
    {
        //
        if ($request->hasFile('image')) {
            $myFile = public_path("uploads/office/$office->photo");
            if (is_file($myFile)) {
                unlink($myFile)  ;
            }
            $image = $request->image;
            $destinationPath = 'uploads/office';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $office->photo = $fileName;
        }
        $office->fill($request->toArray());
        $office->save();
        $offices = Office::Paginate(20);
        return view('admin.view.office.office_images_list', compact('offices'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office)
    {
        //
        $office->delete();
        $offices = Office::Paginate(20);
        return view('admin.view.office.office_images_list', compact('offices'));
    }
}
