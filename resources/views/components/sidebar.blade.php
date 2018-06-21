<div class="sidebar">
    <div class="campaign-selector">
        <h4 class="title">Select your campaign</h4>
        <form action="/campaign/set" method="post" id="campaign-selector">
            <div class="form-group">
                <select id="campaign-select" form="campaign-selector" class="form-control" name="campaign">
                    <option value="test">Test Campaign</option>
                </select>
            </div>
        </form>
    </div>
    @auth
        <nav class="side-nav">
            @if(Auth::user()->verified === 0)
                <a href="{{ route('resend-form') }}">Resend verification email</a>
            @else
                <a href="/profile">Profile</a>
            @endif
        </nav>
    @endauth
    <nav class="side-nav top-margined">
        <a class="pro" href="/account/upgrade">Go Pro</a>
        <a href="/register">Register</a>
        <a href="/about">About Subastral</a>
        <a href="/spell">Spell Creator</a>
        <a href="/browse">Content Browser</a>
        <a href="/faq">FAQ</a>
    </nav>
</div>
