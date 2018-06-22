@extends('layouts.app')

@section('content')
    <div class="panel panel-default top-margined home">
        <div class="panel-heading">
            @if(empty($campaign))
                <h2>Create a Campaign!</h2>
            @else
                <h2>Edit {{ $campaign->name }}</h2>
            @endif
        </div>
        <div class="panel-body">
            <p>This is the form!</p>
            <form id="campaign-form" action="{{ !empty($campaign) ? route('campaign.edit') : route('campaign.create') }}" method="POST">
                <div class="form-group">
                    <label for="name">Campaign Name </label><input id="name" class="form-control" name="name" type="text" value="{{ !empty($campaign) ? $campaign->name : '' }}" />
                </div>
                <div class="form-group">
                    <label for="description">Tell us a little about your campaign </label><textarea class="form-control" rows="3" id="description" name="description" form="campaign-form">{{ !empty($campaign) ? $campaign->description : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="min-level">Minimum Level </label><input id="min-level" name="min-level" type="number" class="form-control" value="{{ !empty($campaign) ? $campaign->min_level : '' }}" />
                    <label for="max-level">Maximum Level </label><input id="max-level" name="max-level" type="number" class="form-control" value="{{ !empty($campaign) ? $campaign->max_level : '' }}" />
                </div>
                <div class="form-group">
                    <label for="beginning">When did your Campaign Begin?</label><input id="beginning" name="beginning" type="date" class="form-control" value="{{ !empty($campaign) ? $campaign->beginning : '' }}" />
                </div>
                <div class="form-group">
                    <label for="author">Author</label><input value="{{ !empty($campaign) ? $campaign->author : '' }}" name="author" id="author" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <button form="campaign-form" type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
