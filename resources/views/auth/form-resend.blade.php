@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 30px">
                <div class="panel panel-default home">
                    <div class="panel-heading">Resend verification email</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('resend') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection