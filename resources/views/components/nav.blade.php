<div class="logo-title-container">
    <img class="logo" src="http://via.placeholder.com/75x75" />
</div>

<h1 class="title">Subastral</h1>

<div class="pull-right login-form">
    <form method="post" action="/login" id="login">
        <label for="username">Username <input name="username" type="text"></label><br>
        <label for="password">Password <input name="password" type="password"></label>
        {{ csrf_field() }}
    </form>
</div>