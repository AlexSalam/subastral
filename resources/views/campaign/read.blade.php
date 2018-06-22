@extends('layouts.app')

@section('content')
    <div class="col-lg-9 top-margined home">
        <h2>{{ $campaign->name }}</h2>
        <div class="row">
            <div class="col-lg-6 campaign-data">
                <div class="data">
                    <p>Started on: {{ $campaign->beginning->toDateTimeString() }}</p>
                    <p>From level {{ $campaign->min_level }} to {{ $campaign->max_level }}</p>
                    <p>Brought to you by: {{ $campagign->author }}</p>
                </div>
                <div class="player-characters">
                    <ul>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="well description">
                    <h3>Description</h3>
                    <p>{{ $campaign->description }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Adventure Log Entries</h3>
                <ul>
                    <li>Examplegt</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div data-toggle="tab" role="tabpanel" class="tab-pane fade in active" id="monsters">
                        <h3>Monsters</h3>
                        <ul>
                            <li>Example</li>
                        </ul>
                    </div>
                    <div data-toggle="tab" role="tabpanel" class="tab-pane fade" id="npcs">
                        <h3>NPCS</h3>
                        <ul>
                            <li>Example</li>
                        </ul>
                    </div>
                    <div data-toggle="tab" role="tabpanel" class="tab-pane fade" id="treasure">
                        <h3>Treasure</h3>
                        <ul>
                            <li>Example</li>
                        </ul>
                    </div>
                    <div data-toggle="tab" role="tabpanel" class="tab-pane fade" id="places">
                        <h3>Places</h3>
                        <ul>
                            <li>Example</li>
                        </ul>
                    </div>
                    <div data-toggle="tab" role="tabpanel" class="tab-pane fade" id="events">
                        <h3>Events</h3>
                        <ul>
                            <li>Example</li>
                        </ul>
                    </div>
                    <div data-toggle="tab" role="tabpanel" class="tab-pane fade" id="graveyard">
                        <h3>Graveyard</h3>
                        <ul>
                            <li>Example</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection