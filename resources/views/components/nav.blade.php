<div class="logo-title-container">
    <img class="logo" src="http://via.placeholder.com/75x75" />
</div>

<h1 class="title"><a href="/">Subastral</a></h1>

<div class="pull-right login-form">
    @guest
        <form method="POST" action="/login" id="login">
            <label for="email">Email <input style="margin-left:30px;" name="email" type="text"></label><br>
            <label for="password">Password <input name="password" type="password"></label>
            <input type="submit" form="login" value="Login" />
            {{ csrf_field() }}
        </form>
        @include('components.login-errors')
    @endguest
    @auth
        <div class="user-box">
            <p>Welcome {{ $user->name }}!</p>
            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                {{ csrf_field() }}
                <input class="pull-right" type="submit" form="logout-form" value="Logout" />
            </form>
        </div>
        @endauth
</div>