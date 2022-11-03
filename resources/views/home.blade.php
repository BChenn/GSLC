@extends('layout')

@section('website')
    <h1>FOOD LIST</h1>
    <br>
    <p>
        <h3>Chicken List</h3>
        <a href="/chicken">
            <button type="button" style="background: red; color:white; border:none"> Chicken HERE</button>
        </a>
    </p>

    <br>
    <p>
        <h3>Pasta List</h3>
        <a href="/pasta">
            <button type="button" style="background: red; color:white; border:none"> Pasta HERE</button>
        </a>
    </p>

    <br>
    <p>
        <h3>Seafood List</h3>
        <a href="/seafood">
            <button type="button" style="background: red; color:white; border:none"> Seafood HERE</button>
        </a>
    </p>
@endsection