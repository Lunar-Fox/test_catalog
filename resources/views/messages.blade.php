@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-12"><h3 class="text-center mb-4">Messages</h3></div>
        @foreach($messages as $message)
            <div class="col-4">
                <h4>{{ $message['author'] }}</h4>
                <p>{{ $message['messagetext'] }}</p>
                <p>{{ date('Y-m-d', strtotime($message['created_at'])) }}</p>
            </div>
        @endforeach
        <div class="col-12">{{ $messages->links() }}</div>
    </div>
</div>
@endsection
