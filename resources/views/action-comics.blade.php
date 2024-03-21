@extends('layouts.comic-page')

@section('comic-thumb')
{{ $action['thumb']}}
@endsection

@section('comic-title')
{{ $action['title']}}
@endsection

@section('comic-description')
{{ $action['description']}}
@endsection

@section('comic-price')
{{ $action['price']}}
@endsection

@section('comic-series')
{{ $action['series']}}
@endsection

@section('comic-sale_date')
{{ $action['sale_date']}}
@endsection

@section('comic-type')
{{ $action['type']}}
@endsection