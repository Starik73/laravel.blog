@if($item->exists)
    <div class="text-danger my-2">
        ID {{ $item->id }}

    </div>
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
@endif
<div class="form-group py-2">
    <button type="submit" class="btn btn-info">Сохранить</button>
    <form action="{{ route('blog.admin.categories.destroy', $item->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" class="btn btn-danger" value="Delete"/>
    </form>
</div>
