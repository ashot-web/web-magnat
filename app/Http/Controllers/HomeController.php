<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\Office;
use App\Portfolio;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts=Contact::first();
        $tel=$contacts->tel;
        $address=$contacts->textTrans('address');
        $portfolios=Portfolio::take(6)->get();
        return view('site.home_content',compact('tel','address','portfolios'));
    }
    public function portfolio()
    {
        $contacts=Contact::first();
        $tel=$contacts->tel;
        $address=$contacts->textTrans('address');
        $portfolios=Portfolio::all();
        return view('site.portfolio_content',compact('tel','address','portfolios'));
    }
    public function portfolioItem($id)
    {
        $contacts=Contact::first();
        $tel=$contacts->tel;
        $address=$contacts->textTrans('address');
        $item=Portfolio::find($id);
        $portfolios=Portfolio::all();
        $prv = Portfolio::where('id', '<', $id)->max('id');
        $nxt = Portfolio::where('id', '>', $id)->min('id');
        $previous=Portfolio::find($prv);
        $next=Portfolio::find($nxt);
        if ($next==null){
            $next=Portfolio::all()->first();
        }
        if($previous==null){
            $previous=Portfolio::orderBy('id','desc')->first();
        }
        return view('site.portfolio_item_content',compact('tel','address','portfolios','item','next','previous'));
    }
    public function blog()
    {
        $blogs=Blog::orderBy('id','desc')->paginate(10);
        $contacts=Contact::first();
        $tel=$contacts->tel;
        $address=$contacts->textTrans('address');
        return view('site.blog_content',compact('blogs','tel','address'));

    }
    public function team()
    {
        $teams=Team::all();
        $contacts=Contact::first();
        $tel=$contacts->tel;
        $address=$contacts->textTrans('address');
        $images=Office::orderBy('id','desc')->get();
        return view('site.our_team_content',compact('teams','tel','address','images'));

    }
    public function contact()
    {
        $contacts=Contact::first();
        $tel=$contacts->tel;
        $address=$contacts->textTrans('address');
        return view('site.contact_content',compact('tel','address'));
    }
    public function sendEmail()
    {
        Mail::send(['text'=>'mail.mail'],['name','user'],function ($message){
            $message->to('ashot.sargsyan94@yahoo.com','to WM')->subject('test email');
            $message->from('asha062594@gmail.com','from ASH');
        });
    }
    public function hiring()
    {
        $contacts=Contact::first();
        $tel=$contacts->tel;
        $address=$contacts->textTrans('address');
        return view('site.our_services_content',compact('tel','address'));
    }
    public function services()
    {
        $contacts=Contact::first();
        $tel=$contacts->tel;
        $address=$contacts->textTrans('address');
        return view('site.our_services_content',compact('tel','address'));
    }
}
