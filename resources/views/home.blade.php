@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-header">
                    <p class="card-header-title">Dashboard</p>
                </div>

                <div class="card-content">
                    @if (session('status'))
                        <div class="message is-warning">
                            <div class="message-body">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <example-component />
        </div>
    </div>
</div>
@endsection
