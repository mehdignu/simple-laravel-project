<!-- edit user -->
@extends('layouts.app')

@section('content')
    <h1>Edit Resident</h1>
    {!! Form::open(['action' => ['ResidentsController@update', $resident->id], 'method' => 'POST']) !!}

    {{Form::label('firstname', 'Firstname')}}
    {{Form::text('firstname', $resident->firstname, ['class' => 'form-control', 'placeholder' => 'Firstname'])}}

    {{Form::label('surname', 'Surname')}}
    {{Form::text('surname', $resident->surname, ['class' => 'form-control', 'placeholder' => 'Surname'])}}

    {{Form::label('address', 'Address')}}
    {{Form::text('address', $resident->address, ['class' => 'form-control', 'placeholder' => 'Address'])}}

    {{Form::label('quote', 'Quote')}}
    {{Form::text('quote', '', ['class' => 'form-control', 'placeholder' => 'new quote'])}}

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection