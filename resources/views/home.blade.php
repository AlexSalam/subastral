@extends('layouts.app')

@section('content')

    <div style="margin-top:30px" class="row">
        <div class="col-md-6">
            <div class="panel panel-default top-left home">
                <div class="panel-heading">
                    <h3>What is Subastral?</h3>
                </div>
                <div class="panel-body">
                    <p>Subastral is a campaign management service to allow dungeon masters to easily keep track of all the content they have created over the years and organise it in an easy to read and searchable format.</p>
                    <p>Easily connect people, places and items together with easily created links and empower your players to interact more your world.</p>
                    <p>Track time and progress through your campaigns adventure log and calendar features.  Countdown to catastrophies, weddings and rituals and allow your players to plan their time accordingly.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default top-right home">
                <div class="panel-heading">
                    <h3>Create a new campaign!</h3>
                </div>
                <div class="panel-body">
                    <p>Campaigns serve to contain all your custom content for your adventure, making it searchable, linkable and available to your players.  Don't worry though, you choose what is published and when it goes out.</p>
                    <form action="/campaign/create" method="post" id="creation-form">
                        <div class="form-group create-container">
                            <input type="text" form="creation-form" placeholder="Campaign Name" class="form-control" />
                            <input type="submit" form="creation-form" value="Create" class="form-control btn-primary btn-large" />
                        </div>
                    </form>
                    <p>You can have only a single campaign in the free tier so make it count!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default bottom-left home">
                <div class="panel-heading">
                    <h3>This site is awesome!</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Store monsters, npcs, places and more!</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default bottom-right home">
                <div class="panel-heading">
                    <h3>This site is awesome!</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Store monsters, npcs, places and more!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection