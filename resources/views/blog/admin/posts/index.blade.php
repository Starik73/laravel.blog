@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-2 my-1">
            <h2 class="px-3">Статьи Блога</h2>
            <div class="card-body">
                <a href="{{  route('blog.admin.posts.create') }}" class="btn btn-info">Написать</a>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead class="table-dark">
            <tr>
                <td>'id'</td>
                <td>'Заголовок'</td>
                <td>'Опубликован:'</td>
                <td>'Автор:'</td>
                <td>'Категория:'</td>
            </tr>
            </thead>
            @php
                /** @var App\Model\BlogPost $post */
            @endphp
            @foreach($paginator as $post)
                <tr @if(!$post->published_at) class="table-info" @endif>
                    <td>{{ $post->id }}</td>
                    <td><a href="{{ route('blog.admin.posts.edit', $post->id) }}"> {{ $post->title }} </a></td>
                    <td>{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d M Y H:i') : '' }}</td>
                    <td>{{ $post->user_id }}</td>
                    <td>{{ $post->category_id }}</td>
                </tr>
            @endforeach
        </table>
        <p>{{ $paginator->links() }}</p>
    </div>
@endsection
