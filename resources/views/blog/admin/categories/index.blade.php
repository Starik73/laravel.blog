@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-2 my-1">
            <h2 class="px-3">Категории Блога</h2>
            <div class="card-body">
                <a href="{{  route('blog.admin.categories.create') }}" class="btn btn-dark">Добавить</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card my-1">
            <div class="card-body">

                <table class="table table-hover">
                    <thead class="table-warning">
                    <tr>
                        <td>ID</td>
                        <td>Категория</td>
                        <td>Родитель</td>
                    </tr>
                    </thead>
                    @foreach($items as $item)
                        @php /** @var App\Models\BlogCategory $item */ @endphp
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><a href="{{ route('blog.admin.categories.edit', $item->id) }}"> {{ $item->title }} </a>
                            </td>
                            <td @if(in_array($item->parent_id, [0,1])) style="color: silver" @endif  >{{ $item->parent_id }} </td>
                        </tr>
                    @endforeach
                </table>
                @if( $items->total() > $items->count() )
                <p>
                    {{ $items->links() }}
                </p>
                    @endif
            </div>
        </div>

    </div>


@endsection
