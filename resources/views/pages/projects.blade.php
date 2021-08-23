@extends('layouts.main-layout')

@section('title', 'Все проекты')

@section('content')

    <h1>Все проекты</h1>

    @include('includes.categories')

    @include('includes.filters')

    @include('includes.category-houses')


    <hr>
    <p>
        Все проекты
    </p>
    <hr>
    {{$houses->links('vendor.pagination.bootstrap-4')}}
@endsection
