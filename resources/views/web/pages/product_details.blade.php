@extends('layouts.master')
@section('title', trans('master.title'))
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 pull-right">
                <div class="product-details">
                    <!--product-details-->
                    @foreach($product_details as $product)
                        <div class="col-sm-5">
                            <div class="view-product">
                            @if($product->product_img != null && file_exists(public_path().'/images/upload/'.$product->img))
                                <img src="/images/{{ $product->product_img }}" alt="" />
                                <a href="/images/{{ $product->product_img }}" rel="prettyPhoto">
                                    <h3><i class="fa fa-search" aria-hidden="true"></i></h3>
                                </a>
                            @else
                                <img src="/images/default-product.png" alt="" />
                                <a href="/images/default-product.png" rel="prettyPhoto">
                                    <h3><i class="fa fa-search" aria-hidden="true"></i></h3>
                                </a>
                            @endif
                               
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
                                    </div>

                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                {{ csrf_field() }}
                                <!--/product-information-->
                                <input type="hidden" class="cart_product_id_{{ $product->product_id }}"
                                    value="{{ $product->product_id }}">
                                <input type="hidden" class="cart_product_name_{{ $product->product_id }}"
                                    value="{{ $product->product_name }}">
                                <input type="hidden" class="cart_product_price_{{ $product->product_id }}"
                                    value="{{ $product->product_price }}">
                                <input type="hidden" class="cart_product_img_{{ $product->product_id }}"
                                    value="{{ $product->product_img }}">
                                <input type="hidden" class="cart_product_desc_{{ $product->product_id }}"
                                    value="{{ $product->product_desc }}">

                                <img src="/images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2>{{ $product->product_desc }}</h2>
                                <h4>{{ $product->product_name }}</h4>
                                <p>@lang('master.products.id'): {{ $product->product_id }}</p>
                                
                                <span>
                                    <span>{{ number_format($product->product_price) }} @lang('master.currency.usd')</span>
                                    <label>Quantity:</label>
                                    <input name="cart_product_qty_{{ $product->product_id }}" type="number" value="1" />

                                    <button  url="{{ route('cart.store') }}" data-url="{{ route('cart.index') }}" type="button" data-id="{{ $product->product_id }}" class="btn btn-default cart add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        @lang('master.add_to_cart.name')
                                    </button>
                                </span>

                                <p><b>@lang('master.category'): </b>{{ $product->category->cate_name }}</p>
                                <a href=""><img src="/images/product-details/share.png" class="share img-responsive"
                                        alt="" /></a>
                                <img src="/images/product-details/rating.png" alt="" /> 
                                <!-- Rating here -->
                            </div>
                            <!--/product-information-->
                        </div>
                    @endforeach
                </div>
                <!--/product-details-->
            </div>
        </div>
    </div>
</section>

@endsection
