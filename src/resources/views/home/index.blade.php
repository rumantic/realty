{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5">Projects</h2>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <!--begin::Item-->
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Apps</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Projects</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">List - Columns 2</a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->

    <div class="d-flex flex-row">
        <!--begin::Aside-->
        <div class="flex-row-auto offcanvas-mobile w-200px w-xxl-275px">
            <!--begin::Card-->
            <div class="card card-custom card-stretch">
                <!--begin::Body-->
                <div class="card-body px-5">
                    Форма поиска
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Aside-->
        <!--begin::List-->
        <div class="flex-row-fluid ml-lg-8">
            <div class="d-flex flex-column flex-grow-1">
                <!--begin::Head-->
                <div class="card card-custom gutter-b">
                    <!--begin::Body-->
                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap py-3">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center mr-2 py-2">
                            <!--begin::Navigation-->
                            <div class="d-flex mr-3">
                                <div class="btn-toolbar" role="toolbar" aria-label="...">
                                    <div class="btn-group mr-2" role="group" aria-label="...">
                                        <button type="button" class="btn btn-outline-secondary btn-icon"><i class="fas fa-grip-horizontal"></i></button>
                                        <button type="button" class="btn btn-outline-secondary btn-icon"><i class="fas fa-list"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mr-3">
                                <div class="dropdown pull-right">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Порядок
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">По возрастанию</a>
                                        <a class="dropdown-item" href="#">По убыванию</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mr-3">
                                <div class="dropdown pull-right">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Сортировать
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Цена</a>
                                        <a class="dropdown-item" href="#">Улица</a>
                                    </div>
                                </div>
                            </div>

                            <!--end::Navigation-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Head-->
                <!--begin::Row-->
                <div class="row">

                    @foreach ($datas as $data)
                        <div class="col-xl-4">
                            @include('sitebill_realty::realty.list.card', ['data' => $data])
                        </div>
                    @endforeach
                    <div class="col-xl-12">

                    {{ $datas->appends(request()->input())->links('sitebill_realty::realty.list.paginate') }}
                    </div>
                </div>
                <!--end::Row-->
            </div>
        </div>
        <!--end::List-->
    </div>
</div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
