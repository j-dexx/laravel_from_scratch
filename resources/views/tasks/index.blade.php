@extends ('layouts.app')

@section ('content')
<ul>
    @foreach ($tasks as $task)
        <li>
            <a href="{{ $task->id }}">
                {{ $task->body }}
            </a>
        </li>
    @endforeach
</ul>
@endsection
