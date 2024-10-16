<?php

namespace App\Http\Controllers;

use App\Models\Web;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.web.index',['webs' => Web::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.web.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Web::saveProject($request);
        return back()->with('message', 'Project info created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Web $web)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Web $web)
    {
        return view('admin.web.edit',['web' => Web::find($web->id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Web $web)
    {
        Web::updateProject($request, $web->id);
        return redirect('/web')->with('message', 'Project info updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Web $web)
    {
        Web::deleteProject($web->id);
        return back()->with('message', 'Project Info delete successfully.');
    }
}
