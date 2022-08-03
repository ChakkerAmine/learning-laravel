@extends('layouts.app')


@section('content')
    <h1>Contact page</h1>
    @if (count($people))
        {{-- kayna --}}
        <ul>
            @foreach ($people as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    @endif
@endsection