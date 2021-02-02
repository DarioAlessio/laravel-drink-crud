@extends('layouts.main-layout')

@section('content')

  <h1>BEVERAGES</h1>

    <a href="{{ route('beverage-create')}}"><h2>I AM THIRSTY!!! ADD...</h2> </a>

    <ul>
      @foreach ($beverages as $beverage)
        <li>
          <a href="{{ route ('beverage-show',$beverage -> id)}}">
                  {{$beverage -> name}}///
          </a>
          <a href="{{ route('beverage-edit', $beverage -> id)}}">E D I T </a>///
          <a href="{{ route('beverage-delete', $beverage -> id )}}">D E L E T E</a>

        </li>


      @endforeach

    </ul>



@endsection
