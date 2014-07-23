@extends('layouts.breach')

@section('main')

<h1>Edit Breach for {{ $breach->OrganizationName }}</h1>
{{ Form::model($breach, array('method' => 'PATCH', 'route' =>
array('breaches.update', $breach->id))) }}
<ul>
    <li>
        {{ Form::label('OrganizationName', 'Organizational Name:') }}
        {{ Form::text('OrganizationName', $breach->OrganizationName) }}
    </li>

    <li>
        {{ Form::label('DatesOfBreach', 'Date(s) of Breach:') }}
        {{ Form::text('DatesOfBreach', $breach->DatesOfBreach) }}
    </li>

    <li>
        {{ Form::label('ReportedDate', 'Reported Date:') }}
        {{ Form::text('ReportedDate', $breach->ReportedDate) }}
    </li>

    <li>
        {{ Form::label('Notes', 'Notes:') }}
        {{ Form::text('Notes', $breach->Notes) }}
    </li>
    <li>
        {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
        {{ link_to_route('breaches.show', 'Cancel', $breach->
        id, array('class' => 'btn')) }}
    </li>
</ul>
{{ Form::close() }}

@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
