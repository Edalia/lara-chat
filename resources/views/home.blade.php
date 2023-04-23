@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                    <chat-messages :messages="messages"></chat-messages>
                <chat-compose
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-compose>
            </div>
        </div>
    </div>
</div>
@endsection
