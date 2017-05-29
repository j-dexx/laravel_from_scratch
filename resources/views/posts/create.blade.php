@extends ('layouts.app')

@section ('content')
<h1>Create Post</h1>

<form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" id="title">
    </div>

    <div class="form-group">
        <label for="body">Body:</label>
        <textarea name="body" class="form-control" id="body">
        </textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
    </div>

    @include ('layouts.errors')
</form>
@endsection
