@if(Session::has('success_login'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <strong>{{ Session::get('success_login') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">@lang('master.close')</span>
        </button>
    </div>
@endif
