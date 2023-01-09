<header>
    <nav class="nav justify-content-center">
        <a class="nav-link {{Route::currentRouteName() === 'index' ? 'active' : ''}}" href="{{route('index')}}"
            aria-current="page">Comics Database</a>
        <a class="nav-link {{Route::currentRouteName() === 'create' ? 'active' : ''}}" href="{{route('create')}}"
            href="{{route('create')}}">Add New Comic</a>
        <a class="nav-link disabled" href="#">link</a>
    </nav>
</header>