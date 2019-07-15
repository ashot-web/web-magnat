<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::Paginate(20);
        return view('admin.view.team.team_list', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.view.team.team_add');
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
            $destinationPath = 'uploads/team';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);

        }
        $team = new Team();
        $team->fill($request->toArray());
        $team->photo = $fileName;
        $team->save();
        $teams = Team::Paginate(20);
        return view('admin.view.team.team_list', compact('teams'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\team $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\team $team
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        //
        return view('admin.view.team.team_edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
        //
        if ($request->hasFile('image')) {
            $myFile = public_path("uploads/team/$team->photo");
            if (is_file($myFile)) {
                unlink($myFile)  ;
            }
            $image = $request->image;
            $destinationPath = 'uploads/team';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $team->photo = $fileName;
        }
        $team->fill($request->toArray());
        $team->save();
        $teams = Team::Paginate(20);
        return view('admin.view.team.team_list', compact('teams'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        //
        $team->delete();
        $teams = Team::Paginate(20);
        return view('admin.view.team.team_list', compact('teams'));
    }
}
