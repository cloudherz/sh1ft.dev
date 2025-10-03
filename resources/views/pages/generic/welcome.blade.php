@extends('layouts.app')

@section('meta-title', 'sh1ft')
@section('meta-description', '')
@section('meta-image', '')
@section('meta-url', '')

@section('mode-desktop')
    
@endsection

@section('mode-mobile')
    <p>Mobile</p>
    <p>App Name: {{ $APP_Name }}</p>
@endsection
