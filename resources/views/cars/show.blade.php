@extends('layouts.master')
@section('title', $car->title)


@section('content')

    <strong class="d-block text-gray-dark">{{ $car->producer }}</strong>
    <small>{{ $car->title }} - {{ $car->number_of_doors}} doors</small>   
         
@endsection

@section('button')

    <a class="btn btn-primary" href="{{ route('cars.index') }}" role="button">All cars</a>

@endsection