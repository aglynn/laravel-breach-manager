<?php

class BreachController extends BaseController {

/**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{
    $breaches = Breach::all();
    //$breaches->toarray();
    return View::make('breaches.index')->with('breaches', $breaches);
}

/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
    return View::make('breaches.create');
}

/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store()
{
   // $input = Input::all();
   // $validation = Validator::make($input, Breach::$rules);

  //  if ($validation->passes())
   // {
     //   Breach::create($input);
   $input = Input::all();
$breach = Breach::create(array('OrganizationName' => $input['OrganizationName'], 'DatesOfBreach' => $input['DatesOfBreach'], 'ReportedDate' => $input['ReportedDate'], 'Notes' => $input['Notes']));
//$breach = new Breach;
//$breach->OrganizationName = $input['OrganizationName'];
//$breach->DatesOfBreach = $input['DatesOfBreach'];
//$breach->ReportedDate = $input['ReportedDate'];
//$breach->Notes = $input['Notes'];

//$breach->save();

        return Redirect::route('breaches.index');
   // }

   /** return Redirect::route('breaches.create')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.'); **/
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return Response
*/
public function show($id)
{
    $breach = Breach::find($id);
    //$breaches->toarray();
    return View::make('breaches.details')->with('breach', $breach);
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return Response
*/
public function edit($id)
{
    $breach = Breach::find($id);
    if (is_null($breach))
    {
        return Redirect::route('breaches.index');
    }
    return View::make('breaches.edit')->with('breach', $breach);
}

/**
* Update the specified resource in storage.
*
* @param  int  $id
* @return Response
*/
public function update($id)
{
    $input = Input::all();
$breach = Breach::find($id);
$breach->OrganizationName = $input['OrganizationName'];
$breach->DatesOfBreach = $input['DatesOfBreach'];
$breach->ReportedDate = $input['ReportedDate'];
$breach->Notes = $input['Notes'];
$breach->save();
/**    $validation = Validator::make($input, Breach::$rules);
//    if ($validation->passes())
    {
        $breach = Breach::find($id);
        $breach->update($input);
        return Redirect::route('breaches.show', $id);
    }
    return Redirect::route('breaches.edit', $id)
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');
**/
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return Response
*/
public function destroy($id)
{
    Breach::find($id)->delete();
    return Redirect::route('breaches.index');
}

}
