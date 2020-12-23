<div class="form-row my-2">
    <div class="col-4">
        <div class="form-group">
            <label for="title">Заголовок:</label>
            <input name="title" value="{{ $post->title }}"
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
                @foreach($postsList as $postOption)
                    <option value="{{ $postOption->id }}"
                            @if($postOption->id == $post->id) selected @endif>
                        {{ $postOption->id_title }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <label for="slug">Идентификатор:</label>
            <input name="slug" value="{{ $post->slug }}"
                   class="form-control"
                   id="slug"
                   type="text">
        </div>
    </div>
</div>
<div class="form-group">
    <label for="description">Сырое:</label>
    <textarea name="description"
              class="form-control"
              id="description"
              rows="3">{{ $post->excerpt }}</textarea>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-2">
            @if(!empty($post->img))
                <img src="/public/uploads/img/posts/{{$post->img}}" alt="Логотип" style="width: 100px">
            @else
                <img class="img-thumbnail" src="/public/uploads/img/nophoto.png" alt="Логотип" style="width: 100px">
            @endif
        </div>
        <div class="col-md-10">
            <label for="img">Логотип post</label>
            <input name="img"
                   value="image"
                   accept="image/*"
                   type="file"
                   class="form-control-file"
                   data-buttonText="Upload Logo"
                   data-size="sm"
                   id="img">
        </div>
    </div>
</div>
