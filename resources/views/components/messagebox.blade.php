@if (\Illuminate\Support\Facades\Session::has('msg'))
    @php
        $msg = Illuminate\Support\Facades\Session::get('msg');
    @endphp
    <div class="alert-box alert alert-dismissable alert-{{ $msg['class'] }}">
        {{ $msg['msg'] }}
    </div>
@endif