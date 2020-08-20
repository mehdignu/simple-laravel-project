
@extends('layouts.app')

@section('content')
    <h1>Residents</h1>
    @if(count($residents) > 0)
        @foreach($residents as $resident)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/residents/{{$resident->id}}">{{$resident->username}}</a></h3>
                        <a href="/residents/{{$resident->id}}/edit">edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No residents found</p>
    @endif
@endsection