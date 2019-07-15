<?php

namespace App\Http\Controllers;

use App\Hiring;
use Illuminate\Http\Request;

class HiringController extends Controller
{
    public function index()
    {
        $hirings = Hiring::Paginate(20);
        return view('admin.view.hiring.hiring_list', compact('hirings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.view.hiring.hiring_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->hasFile('image')) {
            $image = $request->image;
            $destinationPath = 'uploads/hiring';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);

        }
        $hiring = new hiring();
        $hiring->fill($request->toArray());
        $hiring->photo = $fileName;
        $hiring->save();
        $hirings = Hiring::Paginate(20);
        return view('admin.view.hiring.hiring_list', compact('hirings'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\hiring $hiring
     * @return \Illuminate\Http\Response
     */
    public function show(hiring $hiring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\hiring $hiring
     * @return \Illuminate\Http\Response
     */
    public function edit(hiring $hiring)
    {
        //
        return view('admin.view.hiring.hiring_edit', compact('hiring'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\hiring $hiring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hiring $hiring)
    {
        //
        if ($request->hasFile('image')) {
            $myFile = public_path("uploads/hiring/$hiring->photo");
            if (is_file($myFile)) {
                unlink($myFile)  ;
            }
            $image = $request->image;
            $destinationPath = 'uploads/hiring';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $hiring->photo = $fileName;
        }
        $hiring->fill($request->toArray());
        $hiring->save();
        $hirings = Hiring::Paginate(20);
        return view('admin.view.hiring.hiring_list', compact('hirings'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hiring  $hiring
     * @return \Illuminate\Http\Response
     */
    public function destroy(hiring $hiring)
    {
        //
        $hiring->delete();
        $hirings = Hiring::Paginate(20);
        return view('admin.view.hiring.hiring_list', compact('hirings'));
    }
}
