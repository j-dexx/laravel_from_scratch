@extends ('layouts.app')

@section ('content')
    <h1>{{ $post->title }}</h1>

    @if (count($post->tags))
        <ul>
            @foreach ($post->tags as $tag)
                <li>
                    <a href="/posts/tags/{{ $tag->name }}">
                        {{ $tag->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <p class="meta">
        {{ $post->created_at->toFormattedDateString() }}
    </p>

    <p>
        {{ $post->body }}
    </p>

    <hr />

    <div class="comments">
        <ul class="list-group">
        @foreach ($post->comments as $comment)
            <li class="list-group-item">
                <strong>
                    {{ $comment->created_at->diffForHumans() }}:&nbsp;
                </strong>
                {{ $comment->body }}
            </li>
        @endforeach
        </ul>
    </div>

    <div class="card">
        <div class="card-block">
            <form action="/posts/{{ $post->id }}/comments" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Your comment here." rows="8" cols="40" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>

                @includes ('layouts.errors')
            </form>
        </div>
    </div>
@endsection
