@extends('voyager::master')
@section('css')
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
@endsection

@section('page_header')
    we
@endsection
@section('page_title')
@yield('page_title')
@endsection

@section('content')
@yield('content')
@endsection

@section('javascript')
{{-- <script type="text/javascript" src="{{asset('js/app.js') }}"></script> --}}
@endsection