@extends('layouts.main-layout')

@section('title', 'Деревянные дома "под ключ"')

@section('content')
    <h1>Главная......</h1>

    @include('includes.categories')


    @include('includes.category-houses')


    {{$houses->links('vendor.pagination.bootstrap-4')}}
@endsection
