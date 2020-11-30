@extends('layouts.master')
@section('title', trans('master.title'))
@section('content')

<section id="form"><!--form-->
    <div class="container">
        <div class="row">

        @if(isset($user_profile))
            @foreach($user_profile as $user)

            <div class="col-sm-6">
                <div class="signup-form"><!--edit user form-->
            
                    @include('common.message')
        
                    <h2>@lang('master.user.edit.title')</h2>
                    <form action="{{ route('users.update', $user->user_id) }}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                      

                        <label for="">@lang('master.label.fullname')</label>
                        <input type="text" name="fullname" placeholder="@lang('master.placeholder.fullname')" value="{{ $user->fullname }}"/>
                        @if ($errors->has('fullname'))
                            <p class="text-danger">{{ $errors->first('fullname') }}</p>
                        @endif

                        <label for="">@lang('master.label.birthday')</label>
                        <input type="date" name="birthday" placeholder="@lang('master.placeholder.birthday')" value="{{ $user->birthday }}"/>
                        @if ($errors->has('birthday'))
                            <p class="text-danger">{{ $errors->first('birthday') }}</p>
                        @endif

                        <label for="">@lang('master.label.phone')</label>
                        <input type="text" name="phone" placeholder="@lang('master.placeholder.phone')" value="{{ $user->phone }}"/>
                        @if ($errors->has('phone'))
                            <p class="text-danger">{{ $errors->first('phone') }}</p>
                        @endif

                        <label for="">@lang('master.label.gender')</label>
                        <select name="gender" id="">

                        @if($user->gender == config('app.gender.male'))

                            <option selected value="{{ config('app.gender.male') }}">@lang('master.gender.male')</option>
                            <option value="{{ config('master.gender.female') }}">@lang('master.gender.female')</option>
                            <option value="{{ config('app.gender.other') }}">@lang('master.gender.other')</option>

                        @elseif($user->gender == config('app.gender.female'))

                            <option value="{{ config('app.gender.male') }}">@lang('master.gender.male')</option>
                            <option selected value="{{ config('app.gender.female') }}">@lang('master.gender.female')</option>
                            <option value="{{ config('app.gender.other') }}">@lang('master.gender.other')</option>

                        @else

                            <option value="{{ config('app.gender.male') }}">@lang('master.gender.male')</option>
                            <option value="{{ config('app.gender.female') }}">@lang('master.gender.female')</option>
                            <option selected value="{{ config('app.gender.other') }}">@lang('master.gender.other')</option>
                        
                        @endif

                        </select>

                        @if ($errors->has('gender'))
                            <p class="text-danger">{{ $errors->first('gender') }}</p>
                        @endif

                        <label for="">@lang('master.label.facebook')</label>
                        <input type="text" name="facebook" placeholder="@lang('master.placeholder.facebook')" value="{{ $user->facebook }}"/>
                        @if ($errors->has('facebook'))
                            <p class="text-danger">{{ $errors->first('facebook') }}</p>
                        @endif

                        <label for="">@lang('master.label.avatar')</label>
                        <input type="file" name="avatar" placeholder="@lang('master.placeholder.avatar')" value="{{ $user->avatar }}"/>
                        @if ($errors->has('avatar'))
                            <p class="text-danger">{{ $errors->first('avatar') }}</p>
                        @endif

                        <button type="submit" class="btn btn-default">@lang('master.user.edit.update')</button>

                    </form>
                </div><!--/sign up form-->
            </div>

            @endforeach
        @endif

        </div>
    </div>
</section><!--/form-->

@endsection
