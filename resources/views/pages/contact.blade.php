@extends('layouts.app')
@section('title', $page?->seo_title ?? 'الاتصال')

@section('description', $page?->seo_description)

@section('keywords', $page?->seo_keywords)
@section('content')

  @include('components.contact')
@endsection