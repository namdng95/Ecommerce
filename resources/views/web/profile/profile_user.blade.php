@extends('layouts.master')
@section('title', trans('master.title'))
@section('content')

<div class="row user-infos cyruxx">
    <div class="col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">@lang('master.user.info')</h3>
            </div>

    @if(isset($user_profile))
        @foreach ($user_profile as $user)

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                    @if($user->avatar != null && file_exists(public_path().'/images/upload/'.$user->avatar))
                        <img class="img-circle img-responsive" src="images/upload/{{ $user->avatar }}" alt="User Pic">
                    @else
                        <img class="img-circle img-responsive" src="images/upload/default-avatar.jpg" alt="User Pic">
                    @endif
                    </div>
                    <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                        <strong>{{ $user->username }}</strong><br>
                
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td>@lang('master.user.role'):</td>
                                    <td>{{ $user->role == config('app.admin_role') ? trans('master.user.level.user') : trans('master.user.level.user') }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('master.user.fullname'):</td>
                                    <td>{{ $user->fullname }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('master.user.email')</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('master.user.birthday')</td>
                                    <td>{{ \Carbon\Carbon::parse($user->birthday)->format(config('app.date_format')) }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('master.user.gender')</td>
                                    <td>{{ $user->gender == config('app.gender.male') ? trans('master.gender.male') : (trans('master.gender.gender.female') ? trans('master.gender.gender.female') : trans('master.gender.other')) }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('master.user.phone')</td>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('master.user.facebook')</td>
                                    <td>{{ $user->facebook }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="">
                            <span class="pull-right">
                                <button class="btn btn-sm btn-warning" type="button">
                                    <a href="{{ route('users.edit', $user->user_id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    @endif

        </div>
    </div>
</div>

@endsection
