<?php

namespace App\Http\Controllers;

use App\Models\Heading;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        return Heading::latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $heading = new Heading();
        $headings = $heading->getAll();
        // get a list of headings, with an input on top
        return view('heading.create', ["headings" => $headings]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Heading $heading
     * @return void
     */
    public function show(Heading $heading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Heading  $heading
     * @return void
     */
    public function edit(Heading $heading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Heading  $heading
     * @return void
     */
    public function update(Request $request, Heading $heading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Heading  $heading
     * @return void
     */
    public function destroy(Heading $heading)
    {
        //
    }
}
