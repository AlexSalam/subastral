@if($errors->has('email') || $errors->has('password'))
    <div class="login-error alert alert-danger">
        <i onclick="$(this).parent().fadeOut(200)" class="pull-right fas fa-times"></i>
        <p>{{ $errors->all()[0] }}</p>
    </div>
@endif