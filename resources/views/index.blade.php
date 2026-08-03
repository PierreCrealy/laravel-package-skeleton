@extends('laravel-package-skeleton::layouts.app')

@section('title', config('app.name', 'Application'))
@section('brand', config('app.name', 'Package'))
@section('brand_tag', 'package')

{{-- Présentation --}}
@section('bodyClass', 'index')

{{-- Comportement : sélectionne PackageLaravelSkeleton.pages.index --}}
@section('packagePage', 'default')

@section('content')

@endsection
