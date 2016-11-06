@if (Session::has('message'))
    <div class="bg-{{ Session::get('flash_msg_type') }}">
        <div class="container">
            <div class="alert alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ Session::get('flash_msg') }}
            </div>
        </div>
    </div>
@endif