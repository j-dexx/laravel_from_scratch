@extends ('layouts.app')

@section ('content')
<h1>Sign In</h1>

<form action="/login" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" />
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" />
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>

    @include ('layouts.errors')
</form>
@endsection
