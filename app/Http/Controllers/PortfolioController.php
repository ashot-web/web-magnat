<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::Paginate(20);
        return view('admin.view.portfolio.portfolio_list', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.view.portfolio.portfolio_add');
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
            $destinationPath = 'uploads/portfolio';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);

        }
        $portfolio = new Portfolio();
        $portfolio->fill($request->toArray());
        $portfolio->photo = $fileName;
        $portfolio->save();
        $portfolios = Portfolio::Paginate(20);
        return view('admin.view.portfolio.portfolio_list', compact('portfolios'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
        return view('admin.view.portfolio.portfolio_edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
        if ($request->hasFile('image')) {
            $myFile = public_path("uploads/portfolio/$portfolio->photo");
            if (is_file($myFile)) {
                unlink($myFile)  ;
            }
            $image = $request->image;
            $destinationPath = 'uploads/portfolio';
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $portfolio->photo = $fileName;
        }
        $portfolio->fill($request->toArray());
        $portfolio->save();
        $portfolios = Portfolio::Paginate(20);

        return view('admin.view.portfolio.portfolio_list', compact('portfolios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
        $portfolio->delete();
        $portfolios = Portfolio::Paginate(20);

        return view('admin.view.portfolio.portfolio_list', compact('portfolios'));
    }
}
