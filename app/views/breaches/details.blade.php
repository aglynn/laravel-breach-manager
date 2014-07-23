@extends('layouts.breach')
@section('main')

<h1>All Breaches</h1>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Organization Name</th>
        <th>Dates of breach</th>
        <th>Reported Date</th>
        <th>Notes</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>{{ $breach->OrganizationName }}</td>
        <td>{{ $breach->DatesOfBreach }}</td>
        <td>{{ $breach->ReportedDate }}</td>
        <td>{{ $breach->Notes }}</td>
        <td>{{ link_to_route('breaches.edit', 'Edit',
            array($breach->id), array('class' => 'btn btn-info')) }}</td>
        <td>
            {{ Form::open(array('method'
            => 'DELETE', 'route' => array('breaches.destroy', $breach->id))) }}
            {{ Form::submit('Delete', array('class'
            => 'btn btn-danger')) }}
            {{ Form::close() }}
        </td>
    </tr>
    </tbody>

</table>

@stop
