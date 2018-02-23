@extends('layouts.app')

@section('header') @parent @endsection
@section('navigation') @parent @endsection
@section('content')
    @include('manage.index')
@endsection
@section('footer') @parent @endsection