@extends('layouts.main')

@section('content')
<body
<div class="container">
<div>
    <h3>{{ $posts->title }}</h3>
     <a href="/" class="text-muted">Home</a> - {{ $posts->title }}
</div>
<br>
    <div>
        {!! $posts->content !!}
    </div>
</div>
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">© 2022 MedLife</p>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
        </ul>
    </footer>
</div>
</body>

@endsection
