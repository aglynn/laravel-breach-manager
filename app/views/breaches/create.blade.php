@extends('layouts.breach')

@section('main')

<h1>Create User</h1>

{{ Form::open(array('route' => 'breaches.store')) }}
<ul>

    <li>
        {{ Form::label('OrganizationName', 'Organizational Name:') }}
        {{ Form::text('Innotech') }}
    </li>

    <li>
        {{ Form::label('DatesOfBreach', 'Date(s) of Breach:') }}
        {{ Form::text('01/14/2014') }}
    </li>

    <li>
        {{ Form::label('ReportedDate', 'Reported Date:') }}
        {{ Form::text('01/15/2014') }}
    </li>

    <li>
        {{ Form::label('Notes', 'Notes:') }}
        {{ Form::text('Here is my insight on this...') }}
    </li>

    <li>
        {{ Form::submit('Submit', array('class' => 'btn')) }}
    </li>
</ul>
{{ Form::close() }}

@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop