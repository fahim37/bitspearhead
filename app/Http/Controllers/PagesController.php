<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SuccessHistory;
use App\Models\SuccessAttr;

class PagesController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }
    public function pokkt()
    {
       $s_stories = SuccessHistory::where('platform_name','Pokkt')->get();

       foreach($s_stories as $s_story)
       $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
       return view('frontend.pokkt',compact('s_stories'));

    }
    // public function ss_pokkt($empid=0){
    //     $success = SuccessHistory::find($empid);

    //     $s_stories = SuccessHistory::get();
    //     $s_stories = SuccessHistory::with('successattr')->find($empid);
    //     
    //    return 

    // }
    public function imo()
    {
        $s_stories = SuccessHistory::where('platform_name','Imo')->get();

       foreach($s_stories as $s_story)
       $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
        return view('frontend.imo',compact('s_stories'));
    }
    public function likee()
    {
        $s_stories = SuccessHistory::where('platform_name','Likee')->get();

       foreach($s_stories as $s_story)
       $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
        return view('frontend.likee',compact('s_stories'));
    }
    public function mcanvas()
    {
        $s_stories = SuccessHistory::where('platform_name','mCanvas')->get();

        foreach($s_stories as $s_story)
        $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
        return view('frontend.mcanvas',compact('s_stories'));
    }
    public function appnext()
    {
        $s_stories = SuccessHistory::where('platform_name','Appnext')->get();

        foreach($s_stories as $s_story)
        $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
        return view('frontend.appnext',compact('s_stories'));
    }
    public function gupshup()
    {
        $s_stories = SuccessHistory::where('platform_name','Gupshup')->get();

        foreach($s_stories as $s_story)
        $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
        return view('frontend.gupshup',compact('s_stories'));
    }
    public function sizmek()
    {
        $s_stories = SuccessHistory::where('platform_name','Sizmek')->get();

        foreach($s_stories as $s_story)
        $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
        return view('frontend.sizmek',compact('s_stories'));
    }
    public function espncricinfo()
    {
        $s_stories = SuccessHistory::where('platform_name','EspnCricinfo')->get();

        foreach($s_stories as $s_story)
        $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
        return view('frontend.espncricinfo',compact('s_stories'));
    }
    public function influencermarketing()
    {
        $s_stories = SuccessHistory::where('platform_name','Influencer_Marketing')->get();

        foreach($s_stories as $s_story)
        $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
        return view('frontend.influencermarketing',compact('s_stories'));
    }
    public function yahoo()
    {
        $s_stories = SuccessHistory::where('platform_name','Yahoo')->get();

        foreach($s_stories as $s_story)
        $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
        return view('frontend.yahoo',compact('s_stories'));
    
    }
    public function miq()
    {
        $s_stories = SuccessHistory::where('platform_name','MIQ')->get();

        foreach($s_stories as $s_story)
        $s_story->attr = SuccessAttr::where('ss_story_id', $s_story->id)->get();
        return view('frontend.miq',compact('s_stories'));
    }
}
