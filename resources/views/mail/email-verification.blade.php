<h1>Thanks for signing up!</h1>
<p>There is just one more step to completing your registration, click on the link below to verify your email address.</p>
<a href="{{ route('verify', ['code' => $code]) }}">{{ route('verify', ['code' => $code]) }}</a>