<div class="alert alert-info lead">
    <p>Sorry :( No adverts found</p>
    @if(Auth::user())
        <p>You can <a href="/advert/create" class="alert-link">add one</a>!</p>
    @endif
</div>