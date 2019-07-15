<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::Paginate(20);
        return view('admin.view.work.work_list', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.view.work.work_add');
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
            $destinationPath = 'uploads/work';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);

        }
        $work = new work();
        $work->fill($request->toArray());
        $work->photo = $fileName;
        $work->save();
        $works = Work::Paginate(20);
        return view('admin.view.work.work_list', compact('works'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\work $work
     * @return \Illuminate\Http\Response
     */
    public function show(work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\work $work
     * @return \Illuminate\Http\Response
     */
    public function edit(work $work)
    {
        //
        return view('admin.view.work.work_edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\work $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, work $work)
    {
        //
        if ($request->hasFile('image')) {
            $myFile = public_path("uploads/work/$work->photo");
            if (is_file($myFile)) {
                unlink($myFile)  ;
            }
            $image = $request->image;
            $destinationPath = 'uploads/work';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $work->photo = $fileName;
        }
        $work->fill($request->toArray());
        $work->save();
        $works = Work::Paginate(20);
        return view('admin.view.work.work_list', compact('works'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(work $work)
    {
        //
        $work->delete();
        return redirect()->back();
    }
}
