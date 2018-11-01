<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use App\Http\Requests\FormFeedbackRequest;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    
       $feedbacks=Feedback::orderBy('created_at','desc')->get();
       return view('feedbacks.index',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormFeedbackRequest $request)
    {
        // storing data from form
        $name=ucfirst(strtolower($request->name));
        $feedback=Feedback::create([
            'name'=>$name,
            'email'=>$request->email,
            'text'=>$request->text

        ]);
        return redirect()->route('welcome')->with('succesmsg','Thank you for feedback');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        return view('feedbacks.edit',compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(FormFeedbackRequest $request, Feedback $feedback)
    {
        $feedback->update($request->all());
        return redirect()->route('feedback.index')->with('succesmsg','The Feedback was Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        
        $feedback->delete();
        return redirect()->route('feedback.index')->with('succesmsg','The feedback was deleted');
    
    }
}
