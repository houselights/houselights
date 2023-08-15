@foreach($events as $event)
    <div>
        <a href="{{ route('events.show', $event) }}">{{ $event->name }}</a>
    </div>
@endforeach
