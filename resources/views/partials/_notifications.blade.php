@if (Session::has('flash_msg'))
    <div id="flash-messages" class="bg-{{ Session::get('flash_type') }}">
        <div class="container">
            <div class="alert alert-dismissible alert-{{ Session::get('flash_type') }}">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ Session::get('flash_msg') }}
            </div>
        </div>
    </div>
@endif