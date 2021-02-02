@extends('layouts.main-layout')

@section('content')

     <h1>BEVERAGE EDIT</h1>

     <form action="{{ route('beverage-update', $beverage -> id) }}" method="POST">
           @csrf
           @method('POST')
           Name:
           <input name="name" type="text" value="{{ $beverage -> name}}">
           <br>
           Gradation:
           <input name="gradation" type="text" value="{{ $beverage -> gradation}}">
           <br>
           Price:
           <input name="price" type="text" value="{{ $beverage -> price}}">
           <br>
           <input type="submit" value="SAVE">
       </form>



@endsection
