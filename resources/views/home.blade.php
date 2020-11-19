@extends('layouts.master')
@section('title', trans('master.title'))
@section('content')

<section>
    <div class="container">
        <div class="row">
            {{-- include category blade --}}
            @include('include.category')

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">@lang('master.all_items')</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <!-- product here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--features_items-->

                <div class="category-tab">
                    <!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="" data-toggle="tab">@lang('master.hot_items')</a>
                            </li>
                            <li><a href="" data-toggle="tab">@lang('master.trend')</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="">
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <!-- product here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="">
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <!-- product here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/category-tab-->

                <div class="recommended_items">
                    <!--recently_items-->
                    <h2 class="title text-center">@lang('master.recently')</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <!-- hot product here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <!-- hot product here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left recommended-item-control" href="" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <!--/recently_items-->

            </div>
        </div>
    </div>
</section>

@endsection
