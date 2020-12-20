@extends('layouts.app')

@section('content')
    @php
        /** @var App\Models\BlogCategory $item */
        /** @var Illuminate\Support\Collection $categoryList */
    @endphp
    <div class="container">
        <div class="card p-2 my-1">
            <h2 class="px-3">Наименование: <span class="text-info">#{{ $item->id }} {{ $item->title }}</span></h2>
        </div>
    </div>
    <div class="container">
        <form method="POST" action="{{ route('blog.admin.categories.update', $item->id) }}" class="p-2">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-9 card">
                        <div class="form-row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="title">Заголовок:</label>
                                    <input name="title" value="{{ $item->title }}"
                                           class="form-control"
                                           id="title"
                                           type="text"
                                           minlength="3"
                                           required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="parent_id">Родитель</label>
                                    <select name="parent_id"
                                            id="parent_id"
                                            class="form-control"
                                            placeholder="Выбор категории"
                                            required>
                                        @foreach($categoryList as $categoryOption)
                                            <option value="{{ $categoryOption->title }}"
                                                    @if($categoryOption->id == $item->id) selected @endif>
                                                {{ $categoryOption->id }}.{{ $categoryOption->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="slug">Идентификатор:</label>
                                    <input name="slug" value="{{ $item->slug }}"
                                           class="form-control"
                                           id="slug"
                                           type="slug"
                                           required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание:</label>
                            <textarea name="description"
                                      class="form-control"
                                      id="description"
                                      rows="3">{{ $item->description }}
                        </textarea>
                        </div>
                        <div class="form-group">
                            <label for="img">Логотип Category</label>
                            <input name="img" value="{{ $item->img }}"
                                   type="file"
                                   class="form-control-file"
                                   id="img">
                        </div>
                    </div>
                    @if($item->exists)
                        <div class="col-md-3 card">
                            <div class="text-danger my-3">ID {{ $item->id }}</div>
                            <div class="form-group">
                                <label for="created_at">Created At</label>
                                <input name="created_at" value="{{ $item->created_at }}"
                                       type="text"
                                       class="form-control"
                                       id="created_at">
                            </div>
                            <div class="form-group">
                                <label for="updated_at">Update At</label>
                                <input name="updated_at" value="{{ $item->updated_at }}" s
                                       type="text"
                                       class="form-control"
                                       id="updated_at">
                            </div>
                            <div class="form-group">
                                <label for="deleted_at">Delete At</label>
                                <input name="deleted_at" value="{{ $item->deleted_at }}" s
                                       type="text"
                                       class="form-control"
                                       id="deleted_at">
                            </div>
                            <div class="form-group py-2">
                                <button type="submit" class="btn btn-danger">Сохранить</button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
