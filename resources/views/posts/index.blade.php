@extends ('layouts.app')

@section ('content')
    @foreach ($posts as $post)
        @include ('posts.post')
    @endforeach
@endsection
