<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config('backpack.base.html_direction') }}">
<head>
    @include(backpack_view('inc.head'))
</head>
<body class="app flex-row align-items-center">

@include('sitebill_realty::layouts.header.index')

<div class="container">
    @yield('content')
</div>
@include('sitebill_realty::layouts.footer.footer')


@yield('before_scripts')
@stack('before_scripts')

@include(backpack_view('inc.scripts'))

@yield('after_scripts')
@stack('after_scripts')

</body>
</html>
