@extends('layouts.main')

@section('title', 'Главная')

@section('content')
  @include('components.header-services')
  {{-- //- include ./sections/_banner --}}
  @include('sections.featured')
  @include('sections.advantages')
  @include('sections.home-catalog')
  @include('components.hero')
@endsection