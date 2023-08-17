@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $event->name }}</h1>

        <div>{{ $event->description }}</div>

        <div>
            <form method="post" action="{{ route('events.registrants.store', $event) }}">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Registrant</button>
            </form>
        </div>
    </div>
@endsection
