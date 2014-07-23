<?php

class BreachController extends BaseController {

/**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{
    // Using default connection
    //$breaches = DB::collection('breaches')->get();
    //$user = DB::collection('users')->where('name', 'John')->first();

    //$breaches = Breach::all();
    //$breaches = DB::connection('mongodb')->collection('breaches')->get();
    //$breaches->toarray();
    $breaches = Breach::all();
    //$breaches->toarray();
    return View::make('breaches.index')->with('breaches', Breach::all());;
}

/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
//
}

/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store()
{
//
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return Response
*/
public function show($id)
{
//
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return Response
*/
public function edit($id)
{
//
}

/**
* Update the specified resource in storage.
*
* @param  int  $id
* @return Response
*/
public function update($id)
{
//
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return Response
*/
public function destroy($id)
{
//
}

}