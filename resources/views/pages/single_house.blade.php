@extends('layouts.main-layout')

@section('title', $house_info->seo_title)

@section('content')
    <h1>{{ $house_info->seo_h1 }}</h1>

    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="/">Главная</a>
        <a class="breadcrumb-item" href="{{route('getCategory')}}">Проекты</a>
        <a class="breadcrumb-item" href="{{route('getHousesByCategory', $parent_category->slug)}}">{{$parent_category->title}}</a>
        <span class="breadcrumb-item active">{{ $house_info->title }}</span>
    </nav>

    <article>{!! $house_info->description !!}</article>

@endsection
