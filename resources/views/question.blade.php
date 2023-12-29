@extends('layouts.main')

@section('container')

<div class="chat-container">
    @foreach($messages as $message)
    <div class="message {{ $message['role'] === 'assistant' ? 'assistant' : '' }}">
        <div class="message-content">
            <h3>{{ $message['role'] === 'assistant' ? 'Bot Satoto Answer:' : 'Kamu:' }}</h3>
            <p>{!! \Illuminate\Mail\Markdown::parse($message['content']) !!}</p>
        </div>
    </div>
    @endforeach
</div>

<form class="input-container" action="/question" method="post">
    @csrf
    <input id="message" type="text" name="message" placeholder="Tanyakan sesuatu" autocomplete="off" />
    <button class="m-2 btn btn-success" type="submit">Kirim</button>
    <a href="/reset">Reset</a>
</form>

@endsection
