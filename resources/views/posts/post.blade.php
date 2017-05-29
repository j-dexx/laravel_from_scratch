<div class="post">
    <h2 class="title">
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h2>

    <p class="meta">
        {{ $post->user->name }} on
        {{ $post->created_at->toFormattedDateString() }}
    </p>

    {{ $post->body }}
</div>
