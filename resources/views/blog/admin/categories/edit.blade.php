@extends('layouts.app')

@section('content')
    @php
        /** @var \App\Models\BlogCategory $item */
        /** @var \Illuminate\Support\Collection $categoryList */
    @endphp
    <div class="container">
        <div class="my-2">
            <h2 class="text-dark">Наименование: <span class="text-info">#{{ $item->id }} {{ $item->title }}</span></h2>
        </div>
        @if($item->exists)
            <form method="POST" enctype="multipart/form-data"
            action="{{ route('blog.admin.categories.update', $item->id) }}" class="p-2">
        @method('PATCH')
        @else
            <form method="POST" enctype="multipart/form-data"
            action="{{ route('blog.admin.categories.store') }}" class="p-2">
        @endif

            @csrf
            @php
                /** @var \Illuminate\Support\ViewErrorBag $errors */
            @endphp
            @if($errors->any())
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                            {{$errors->first()}}
                        </div>
                    </div>
                </div>
            @endif
            @if(session('success'))
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                            {{ session()->get('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="form-group">
                <div class="row justify-content-center">
                    <div class="col-md-9 card my-1">
                        @include('blog.admin.categories.includes.item_edit_main_col')
                    </div>
                    <div class="col-md-3 card my-1">
                        @include('blog.admin.categories.includes.item_edit_add_col')
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
