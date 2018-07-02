<div class="sidebar">
    <div class="campaign-selector">
        <h4 class="title">Select a campaign</h4>
        <div class="form-group">
            @if(!empty(Auth::user()->campaigns))
                <select id="campaign-select" class="form-control">
                    @foreach(Auth::user()->campaigns as $campaign)
                        <option value="/campaign/id/{{ $campaign->id }}">{{ $campaign->name }}</option>
                    @endforeach
                    <option value="/campaign/create">New Campaign</option>
                </select>
            @else
                <select id="campaign-select" class="form-control">
                    <option value="/campaign/create">New Campaign</option>
                </select>
            @endif
        </div>
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
