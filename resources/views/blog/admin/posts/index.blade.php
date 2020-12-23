@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-2">
            <h2>Статьи Блога</h2>
        </div>
    </div>
    <div class="container">
        <table class="table table-info table-hover">
            <thead class="table-warning">
            <tr>
                <td>'id'</td>
                <td>'title'</td>
                <td>'slug'</td>
                <td>'is_published'</td>
                <td>'published_at'</td>
                <td>'user_id'</td>
                <td>'category_id'</td>
            </tr>
            </thead>
            @foreach($paginator as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="#{{ $item->id }}"> {{ $item->title }} </a></td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->is_published }}</td>
                    <td>{{ $item->published_at }}</td>
                    <td>{{ $item->user_id }}</td>
                    <td>{{ $item->category_id }}</td>
                </tr>
            @endforeach
        </table>
        <p>{{ $paginator->links() }}</p>
    </div>
@endsection
