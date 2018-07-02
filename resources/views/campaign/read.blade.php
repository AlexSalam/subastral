@extends('layouts.app')

@section('content')
    <div class="col-lg-9 top-margined home">
        <h2>{{ $campaign->name }}</h2>
        <div class="row">
            <div class="col-lg-12 actions panel panel-default top-margined bot-margined">
                <h4 class="panel-heading">Actions</h4>
                <ul class="list-inline">
                    <li><a href="{{ route('campaign.edit', ['id' => $campaign->id]) }}">Edit</a></li>
                    <li>
                        <form id="delete" action="{{ route('campaign.delete', $campaign->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a onclick="deleteAlert()">Delete</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 campaign-data">
                <div class="data">
                    <p>Started on: {{ $campaign->beginning }}</p>
                    <p>From level {{ $campaign->min_level }} to {{ $campaign->max_level }}</p>
                    <p>Authored by: {{ $campaign->author }}</p>
                </div>
                <div class="player-characters">
                    <h3>Players</h3>
                    <ul>
                        <li>Example the Druid</li>
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
        <div class="row bot-margined">
            <div class="col-lg-12">
                <h3>Adventure Log Entries</h3>
                <ul>
                    <li>Example</li>
                </ul>
            </div>
        </div>
        <div class="row bot-margined">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#monsters">Monsters</a></li>
                    <li><a data-toggle="tab" href="#npcs">NPCS</a></li>
                    <li><a data-toggle="tab" href="#treasure">Treasure</a></li>
                    <li><a data-toggle="tab" href="#places">Places</a></li>
                    <li><a data-toggle="tab" href="#events">Events</a></li>
                    <li><a data-toggle="tab" href="#graveyard">Graveyard</a></li>
                </ul>
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