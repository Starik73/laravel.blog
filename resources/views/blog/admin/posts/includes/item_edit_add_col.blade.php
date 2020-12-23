@if($post->exists)
    <div class="text-danger my-2">
        ID {{ $post->id }}

    </div>
    <div class="form-group">
        <label for="user_id">Автор</label>
        <input name="user_id" value="{{ $post->user_id }}"
               type="text"
               class="form-control"
               id="user_id">
    </div>
    <div class="form-group">
        <label for="is_published">Опубликовано:</label>
        <input name="is_published" @if($post->is_published) checked @endif
               type="checkbox"
               id="is_published">
    </div>
    <div class="form-group">
        <label for="published_at">Дата публикации:</label>
        <input name="published_at" value="{{ $post->published_at }}"
               type="text"
               class="form-control"
               id="published_at">
    </div>
    <div class="form-group">
        <label for="created_at">Created At</label>
        <input name="created_at" value="{{ $post->created_at }}"
               type="text"
               class="form-control"
               id="created_at">
    </div>
    <div class="form-group">
        <label for="updated_at">Update At</label>
        <input name="updated_at" value="{{ $post->updated_at }}" s
               type="text"
               class="form-control"
               id="updated_at">
    </div>
    <div class="form-group">
        <label for="deleted_at">Delete At</label>
        <input name="deleted_at" value="{{ $post->deleted_at }}" s
               type="text"
               class="form-control"
               id="deleted_at">
    </div>
@endif
<div class="form-group py-2">
    <button type="submit" class="btn btn-danger">Сохранить</button>
</div>
