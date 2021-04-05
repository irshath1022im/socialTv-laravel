@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('status'))
    <div class="alert alert-info">
                <li>{{ session()->get('status')}}</li>
    </div>
@endif
