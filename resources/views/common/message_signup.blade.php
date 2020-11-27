@if ( Session::has('error_signup') )
    <div class="alert alert-danger alert-dismissible" role="alert">
        <strong>{{ Session::get('error_signup') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">@lang('master.close')</span>
        </button>
    </div>
@endif
@if( Session::has('success_signup' ))
    <div class="alert alert-success alert-dismissible" role="alert">
        <strong>{{ Session::get('success_signup') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">@lang('master.close')</span>
        </button>
    </div>
@endif
