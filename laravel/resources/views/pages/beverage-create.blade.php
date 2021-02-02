@extends('layouts.main-layout')

@section('content')

  <h1>NEW BEVERAGE</h1>

  <form action="{{ route('beverage-store') }}" method="POST">
        @csrf
        @method('POST')
        Name:
        <input name="name" type="text">
        <br>
        Gradation:
        <input name="gradation" type="text">
        <br>
        Price:
        <input name="price" type="text">
        <br>
        <input type="submit" value="SAVE">
    </form>

@endsection
