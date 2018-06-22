@extends('layouts.app')

@section('content')

    <div class="row top-margined">
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
                    <form action="/campaign/create" method="GET" id="creation-form">
                        <div class="form-group-lg create-container">
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
                    <h3>Awesome features!</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Free Tier</h4>
                            <ul>
                                <li>Single campaign</li>
                                <li>Linking of content</li>
                                <li>Search functionality</li>
                                <li>Adventure Log</li>
                            </ul>
                        </div>
                        <div class="col-md-6 comp-list">
                            <h4>Pro Tier</h4>
                            <ul>
                                <li>Unlimited campaigns</li>
                                <li>Export content to other campaigns</li>
                                <li>Content browser</li>
                                <li>Store images or art with content</li>
                                <li>Custom spells</li>
                                <li>Ad free experience</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default bottom-right home">
                <div class="panel-heading">
                    <h3>Featured Content</h3>
                </div>
                <div class="panel-body">
                    <h4>Ridley the Gnome</h4>
                    <p>Smooth, suave and sophisticated Ridley is overworked and underpaid while working for the Vae'lor archeologists guild, a product of astounding genius and poorly negotiated holiday allowanced Ridley is the gnome to talk to about your expedition into the unknown.</p>
                    <p>Whether you're search for the lost city of an elder race or just some shiny mcguffin Ridley is there to help and of course skim a bit off the top of the budget!</p>
                </div>
            </div>
        </div>
    </div>

@endsection