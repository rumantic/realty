@extends('sitebill_realty::layouts.default')




@section('content')
@endsection

@section('after_content_widgets')
    @include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('section', 'after_content')->toArray() ])
@endsection
