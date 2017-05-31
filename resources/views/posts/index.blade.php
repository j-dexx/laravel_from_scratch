@extends ('layouts.app')

@section ('content')
    @foreach ($posts as $post)
        @include ('posts.post')
    @endforeach
@endsection

@section ('sidebar')
<div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
    @foreach ($archives as $stats)
        <li>
            <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                {{ $stats['month'] . ' ' . $stats['year'] }}
            </a>
        </li>
    @endforeach
    </ol>
</div>

<div class="sidebar-module">
    <h4>Tags</h4>
    <ol class="list-unstyled">
    @foreach ($tags as $tag)
        <li>
            <a href="/posts/tags/{{ $tag }}">
                {{ $tag }}
            </a>
        </li>
    @endforeach
    </ol>
</div>
@endsection
