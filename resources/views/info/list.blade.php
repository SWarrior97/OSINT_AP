@if (Session::has('message_info'))
    <div id="mydiv" class="alert alert-info">
        {{ Session::get('message_info') }}
    </div>
@endif

@if (Session::has('message_success'))
    <div id="mydiv" class="alert alert-success">
        {{ Session::get('message_success') }}
    </div>
@endif

@if (Session::has('message_danger'))
    <div id="mydiv" class="alert alert-danger">
        {{ Session::get('message_danger') }}
    </div>
@endif
