@extends('layouts.main-layout')

@section('content')

  <h1>B E V E R A G E</h1>

  <li>
    {{$beverage -> id}}/
    {{$beverage -> name}}/
    {{$beverage -> gradation}}/
    {{$beverage -> price}}/
  </li>

@endsection
