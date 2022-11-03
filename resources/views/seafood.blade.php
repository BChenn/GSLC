@extends('layout')

@section('website')
    <h1>SEAFOOD LISTS</h1>
    <br>
    @foreach ($seafood as $list)
        <ul>
            <li>
                <p>
                    <h3>{{ $list["foodname"] }}</h3> 
                    <h6>{{ $list["price"] }}</h6>
                </p>
            </li>
        </ul>
    @endforeach
    <br>
@endsection