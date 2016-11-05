@if (Session::has('message'))
    <div class="container-fluid bg-{{ Session::get('message')['type'] }}">

    </div>
    <div class="alert alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('message')['text'] }}
    </div>
@endif