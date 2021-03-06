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
                        <td>Лого:</td>
                        <td>Категория</td>
                        <td>Родитель</td>
                    </tr>
                    </thead>
                    @foreach($paginator as $item)
                        @php /** @var App\Models\BlogCategory $item */ @endphp
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <a href="{{ route('blog.admin.categories.edit', $item->id) }}">
                                @if(!empty($item->img))
                                    <img src="/public/uploads/img/categories/{{$item->img}}" alt="Логотип" style="width: 100px">
                                @else
                                    <img class="img-thumbnail" src="/public/uploads/img/nophoto.png" alt="Логотип" style="width: 100px">
                                @endif
                                </a>
                            </td>
                            <td><a href="{{ route('blog.admin.categories.edit', $item->id) }}"> {{ $item->title }} </a>
                            </td>
                            <td @if(in_array($item->parent_id, [0,1])) style="color: silver" @endif  >{{ $item->parent_id }} </td>
                        </tr>
                    @endforeach
                </table>
                @if( $paginator->total() > $paginator->count() )
                <p>
                    {{ $paginator->links() }}
                </p>
                    @endif
            </div>
        </div>

    </div>


@endsection
