@extends('layouts.main')

@section('title', $product->title)

@section('content')
  @include('sections.product')
@endsection