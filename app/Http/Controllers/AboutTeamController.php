<?php

namespace App\Http\Controllers;

use App\AboutTeam;
use App\Team;
use Illuminate\Http\Request;

class AboutTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teams = AboutTeam::Paginate(20);
        $teams->load('workers');
//        dd($teams);
        return view('admin.view.team.about_list', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $workers = Team::all();
        return view('admin.view.team.about_add', compact('workers'));
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
        $team = new AboutTeam();
        $team->fill($request->toArray());
        $team->save();
        $teams = AboutTeam::Paginate(20);
        $teams->load('workers');
        return view('admin.view.team.about_list', compact('teams'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutTeam  $aboutTeam
     * @return \Illuminate\Http\Response
     */
    public function show(AboutTeam $aboutTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutTeam  $aboutTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutTeam $aboutTeam)
    {
        //
        $workers=Team::all();
        return view('admin.view.team.about_edit', compact('aboutTeam','workers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutTeam  $aboutTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutTeam $aboutTeam)
    {
        //
        $aboutTeam->fill($request->toArray());
        $aboutTeam->save();
        $teams = AboutTeam::Paginate(20);
        $teams->load('workers');
        return view('admin.view.team.about_list', compact('teams'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutTeam  $aboutTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutTeam $aboutTeam)
    {
        //
        $aboutTeam->delete();
        $teams = AboutTeam::Paginate(20);
        $teams->load('workers');
        return view('admin.view.team.about_list', compact('teams'));
    }
}
