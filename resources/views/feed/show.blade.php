@extends('layouts.app')

@section('content')

    <h1>{{$data['resident']->username}}</h1>


    <h5>quotes</h5>


    <ul>

        @if(count($data['quotes']) > 0)
            @foreach ($data['quotes'] as $quote)
                <li>{{$quote->quotation}}</li>
            @endforeach
        @else
            <p>No quotes found</p>
        @endif

    </ul>

@endsection