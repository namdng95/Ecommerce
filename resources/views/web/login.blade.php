@extends('layouts.master')
@section('title', trans('master.title'))
@section('content')

<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>@lang('master.login_title')</h2>

                    @include('common.error_login')

                    <form action="{{ route('post.login') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="email" name="email" placeholder="@lang('master.placeholder.email')" value="{{ old('email') }}"/>
                        @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                        <input type="password" name="password" placeholder="@lang('master.placeholder.password')" value="{{ old('password') }}"/>
                        @if ($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                        @endif
                        <span>
                            <input type="checkbox" name="remember" class="checkbox"> 
                            @lang('master.remember')
                        </span>
                        <button type="submit" class="btn btn-default">@lang('master.login')</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">@lang('master.or')</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <button type="button" class="btn btn-warning btnSingup"><h3><a href="{{ route('register') }}">@lang('master.signup')</a></h3></button>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

@endsection
