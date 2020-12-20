@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-2">
            <h2>Статьи Блога</h2>
        </div>
    </div>
    <div class="container">
        <table class="table table-info table-hover">
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="#{{ $item->id }}"> {{ $item->title }} </a></td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @endforeach
        </table>
        <p>{{ $items->links() }}</p>
    </div>
@endsection
