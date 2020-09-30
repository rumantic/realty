<div class="card card-custom card-stretch gutter-b">
    <a href="/realty/{{$data->id}}" class="ribbon ribbon-clip ribbon-left">
        <div class="ribbon-target price-badge">
            <span class="ribbon-inner bg-warning"></span>{{ number_format($data->price, 0, '.', ' ') }} руб.
        </div>
        <img src="https://realia.sitebill.ru/img/data/img5ae155b2c836f_1524716978_1.jpg" class="card-img-top" alt="...">
    </a>


    <div class="card-body">
        <!--begin::Items-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Общая</span>
                    <span class="font-weight-bolder font-size-h5">98</span>
                </div>
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Жилая</span>
                    <span class="font-weight-bolder font-size-h5">70</span>
                </div>
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Этаж</span>
                    <span class="font-weight-bolder font-size-h5">
													11/23</span>
                </div>
            </div>
            <!--end::Item-->
        </div>
        <!--begin::Items-->
        <div class="d-flex align-items-center mb-7">
            <!--begin::Title-->
            <div class="d-flex flex-column">
                <a href="/realty/{{$data->id}}" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">{{$data->get_entity('city_id')->title()}} {{$data->city_name}} {{$data->get_entity('region_id')->title()}} {{$data->region_name}}</a>
                <span class="text-muted font-weight-bold">{{ \Illuminate\Support\Str::limit($data->text, 150, $end='...') }}</span>
            </div>
        </div>


    </div>
</div>

