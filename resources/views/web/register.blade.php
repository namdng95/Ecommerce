@extends('layouts.master')
@section('title', trans('master.title'))
@section('content')

<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="signup-form"><!--sign up form-->
                    
                    @include('common.message_signup')

                    <h2>@lang('master.signup_title')</h2>
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="">@lang('master.label.username')</label>
                        <input type="text" name="username" placeholder="@lang('master.placeholder.username')" value="{{ old('username') }}"/>
                        @if ($errors->has('username'))
                            <p class="text-danger">{{ $errors->first('username') }}</p>
                        @endif
                        <label for="">@lang('master.label.email')</label>
                        <input type="email" name="email" placeholder="@lang('master.placeholder.email')" value="{{ old('email') }}"/>
                        @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                        <label for="">@lang('master.label.password')</label>
                        <input type="password" name="password" placeholder="@lang('master.placeholder.password')" value="{{ old('password') }}"/>
                        @if ($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                        @endif
                        <label for="">@lang('master.label.re_password')</label>
                        <input type="password" name="re_password" placeholder="@lang('master.placeholder.re_password')" value="{{ old('re_password') }}"/>
                        @if ($errors->has('re_password'))
                            <p class="text-danger">{{ $errors->first('re_password') }}</p>
                        @endif
                        <label for="">@lang('master.label.fullname')</label>
                        <input type="text" name="fullname" placeholder="@lang('master.placeholder.fullname')" value="{{ old('fullname') }}"/>
                        @if ($errors->has('fullname'))
                            <p class="text-danger">{{ $errors->first('fullname') }}</p>
                        @endif
                        <label for="">@lang('master.label.birthday')</label>
                        <input type="date" name="birthday" placeholder="@lang('master.placeholder.birthday')" value="{{ old('birthday') }}"/>
                        @if ($errors->has('birthday'))
                            <p class="text-danger">{{ $errors->first('birthday') }}</p>
                        @endif
                        <label for="">@lang('master.label.phone')</label>
                        <input type="text" name="phone" placeholder="@lang('master.placeholder.phone')" value="{{ old('phone') }}"/>
                        @if ($errors->has('phone'))
                            <p class="text-danger">{{ $errors->first('phone') }}</p>
                        @endif
                        <label for="">@lang('master.label.gender')</label>
                        <select name="gender" id="">
                            <option value="@lang('master.gender.male')">@lang('master.gender.male')</option>
                            <option value="@lang('master.gender.female')">@lang('master.gender.female')</option>
                            <option value="@lang('master.gender.other')">@lang('master.gender.other')</option>
                        </select>
                        @if ($errors->has('gender'))
                            <p class="text-danger">{{ $errors->first('gender') }}</p>
                        @endif
                        <label for="">@lang('master.label.facebook')</label>
                        <input type="text" name="facebook" placeholder="@lang('master.placeholder.facebook')" value="{{ old('facebook') }}"/>
                        @if ($errors->has('facebook'))
                            <p class="text-danger">{{ $errors->first('facebook') }}</p>
                        @endif
                        <label for="">@lang('master.label.avatar')</label>
                        <input type="file" name="avatar" placeholder="@lang('master.placeholder.avatar')" value="{{ old('avatar') }}"/>
                        @if ($errors->has('avatar'))
                            <p class="text-danger">{{ $errors->first('avatar') }}</p>
                        @endif
                        <button type="submit" class="btn btn-default">@lang('master.signup')</button>
                    </form>
                </div><!--/sign up form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">@lang('master.or')</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <button type="button" class="btn btn-warning btnSingup"><h3><a href="{{ route('login') }}">@lang('master.login')</a></h3></button>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

@endsection
