@extends('Frontend.layouts.all')
@section('content')
    @include('Frontend.include.header')
	@include('Frontend.sidebar.first')
	@include('Frontend.chat.addFriend')
	@include('Frontend.chat.createChat')
	@include('Frontend.status.main')
@stop