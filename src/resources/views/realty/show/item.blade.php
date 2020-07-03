{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    show item {{$data->id}}
    <br>
    {{print_r($data)}}
@endsection
