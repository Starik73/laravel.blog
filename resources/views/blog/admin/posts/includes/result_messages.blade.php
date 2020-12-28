@if($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
                <span aria-hidden="true">x</span>
                {{ $errors->first() }}
            </div>
        </div>
    </div>
@endif
@if(session('success'))
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
                <span aria-hidden="true">x</span>
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
@endif
