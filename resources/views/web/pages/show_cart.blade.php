@extends('layouts.master')
@section('title', trans('master.title'))
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="features_items">
                    <section id="cart_items">
                        <div class="container-fluid">
                            <div class="breadcrumbs">
                                <ol class="breadcrumb">
                                    <li><a href="{{ route('home' )}}">@lang('master.home')</a></li>
                                    <li class="active">@lang('master.shopping_cart.shopping')</li>
                                </ol>
                            </div>

                            @include('common.message')

                            <div class="table-responsive cart_info">
                                <form action="{{ route('cart.update.all') }}" method="POST">
                                    {{ csrf_field() }}
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr class="cart_menu">
                                                <td class="image style_cart">@lang('master.shopping_cart.image')</td>
                                                <td class="description">@lang('master.shopping_cart.name')</td>
                                                <td class="price">@lang('master.shopping_cart.price')</td>
                                                <td class="quantity">@lang('master.shopping_cart.qty')</td>
                                                <td class="total">@lang('master.shopping_cart.total')</td>
                                                <td>Delete</td>
                                            </tr>
                                        </thead>
                @if(Session::get('cart') == true)
                    @php
                        $total = 0; 
                    @endphp

                                @foreach(Session::get('cart') as $key => $cart)
                                    @php
                                        $subTotal = $cart['product_price'] * $cart['product_qty'];
                                        $total += $subTotal;
                                    @endphp
                                        <tbody>
                                            <tr>
                                                <td class="img-fluid cart_img">
                                                    <img src="/images/{{ $cart['product_img'] }}" alt="">
                                                </td>
                                                <td class="name">
                                                    <h4>{{ $cart['product_name'] }}</h4>
                                                </td>
                                                <td class="cart_price">
                                                    <p>{{ number_format($cart['product_price']) . ' ' . 'USD' }}</p>
                                                </td>
                                                <td class="cart_quantity">
                                                    <div class="cart_quantity_button">
                                                        <input type="number" name="cart_qty[{{ $cart['rowId'] }}]" value="{{ $cart['product_qty'] }}" >
                                                    </div>
                                                </td>
                                                <td class="cart_total">
                                                    <p class="cart_total_price">
                                                        {{ number_format($subTotal) . ' ' . 'USD' }}
                                                    </p>
                                                </td>
                                                <td class="cart_delete">
                                                        <a href="{{ route('cart.delete', $cart['rowId']) }}" type="submit" class="cart_quantity_delete">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>

                                        </tbody>
                                @endforeach
                                        <tr>
                                            <td>
                                                <input type="submit" value="@lang('master.shopping_cart.update')" name="update_qty"
                                                    class="check_out btn btn-default btn-sm">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!--/#cart_items-->

                    <section id="do_action">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="total_area">
                                        <ul>
                                            <li>@lang('master.shopping_cart.total')
                                                <span>{{ number_format($total) . ' ' . 'USD' }}</span>
                                            </li>
                                            <li>@lang('master.shopping_cart.tax') <span></span></li>
                                            <li>@lang('master.shopping_cart.total')
                                                <span>{{ number_format($total) . ' ' . 'USD' }}</span>
                                            </li>
                                        </ul>
                                        <!-- <a class="btn btn-default update" href="">Update</a> -->
                                        <a class="btn btn-default check_out"
                                            href="">@lang('master.checkout')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                    <!--/#do_action-->
                    <div class="payment-options">
                        <button class="btn btn-primary">
                            <a class="text-white" href="{{ route('home') }}">
                                @lang('master.back')
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
