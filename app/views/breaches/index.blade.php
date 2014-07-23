@extends('layouts.breach')
@section('main')

<h1>All Breaches</h1>

<p>{{ link_to_route('breaches.create', 'Add new breach') }}</p>

@if ($breaches->count())
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Organization Name</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($breaches as $breach)
    <tr>
        <td>{{ $breach->OrganizationName }}</td>
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
    @endforeach

    </tbody>

</table>
@else
There are no breaches
@endif

@stop