<div class="form-row my-2">
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
                    <option value="{{ $categoryOption->id }}"
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
                   type="text"
                   required>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="description">Описание:</label>
    <textarea name="description"
              class="form-control"
              id="description"
              rows="3">{{ old('descriptoin', $item->description) }}</textarea>
</div>
<div class="form-group">
    <label for="img">Логотип Category</label>
    @if(!empty($item->img))
        <img src="/public/uploads/img/categories/{{$item->img}}" alt="Логотип" style="width: 100px">
    @else
        <img class="img-thumbnail" src="/public/uploads/img/nophoto.png" alt="Логотип" style="width: 100px">
    @endif
    <input name="img"
           value="{{ $item->img }}"
           type="file"
           class="form-control-file"
           data-buttonText="Upload Logo"
           data-size="sm"
           id="img">
</div>
