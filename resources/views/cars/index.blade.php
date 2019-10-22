@extends('layouts.master')
@section('title', 'All cars')


@section('content')

    @foreach($cars as $car)      
          <strong class="d-block text-gray-dark"><a href="/cars/{{$car->id}}">{{ $car->producer }}</a></strong>
          <small>{{ $car->title }} - {{ $car->number_of_doors}} doors</small>
    @endforeach
    
@endsection


@section('links')

    {{$cars->links()}}
    
@endsection

