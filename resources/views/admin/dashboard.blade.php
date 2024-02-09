@extends('layouts.admin')

@section('title')
الرئسية
@endsection

@section('contentheader')
الرئسية
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.dashboard') }}">الرئيسية</a>
@endsection

@section('contentheaderactive')
عرض
@endsection


@section('content')
<div class="row" style="background-image: url({{ asset('images/imag.jpg') }}); background-size:cover ; background-reapete:no-reapete ; min-height:600px"></div>
@endsection
 