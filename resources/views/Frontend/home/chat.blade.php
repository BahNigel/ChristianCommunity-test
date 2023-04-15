@extends('Frontend.layouts.all')
@section('content')
    @include('Frontend.include.header')
	@include('Frontend.sidebar.first')
	@include('Frontend.home.addFriend')
	@include('Frontend.home.createChat')
	@include('Frontend.home.mainChat')
@stop