@extends('layouts.main-layout')

@section('title')
    {{$category_info->seo_title}}
@endsection

@section('content')

    <h1>{{$category_info->seo_h1}}</h1>

    @include('includes.categories')

    @include('includes.filters')

    @include('includes.category-houses')


    <hr>
    <p>
        {{ $category_info->description }}
    </p>
    <hr>
    {{$houses->links('vendor.pagination.bootstrap-4')}}
@endsection
