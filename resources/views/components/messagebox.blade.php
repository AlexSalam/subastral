@if (\Illuminate\Support\Facades\Session::has('msg'))
    @php
        $msg = Illuminate\Support\Facades\Session::get('msg');
    @endphp
    <div class="alert-box alert alert-dismissable alert-{{ $msg['class'] }}">
        {{ $msg['msg'] }}
    </div>
@endif
@if($errors->any())
    <div class="alert-box alert-dismissable alert-danger">
        <ul class="form-error-list">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif