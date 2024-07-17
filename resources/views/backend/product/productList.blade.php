@extends('backend.layouts.master')


@section('title', 'Products')
@section('content')
    @include('backend.product.ProductTable')
@endsection