@extends('Template')


@section('content')

    <h1>listado</h1>
    @foreach ($posts as $post)
        <p>
            <strong>{{$post['id'] }} </strong>
            <a href="{{route('Post',$post['slug'])}}">
                {{$post['title']}}
            </a>
        </p>
    @endforeach


@endsection


