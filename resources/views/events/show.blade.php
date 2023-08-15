<h1>{{ $event->name }}</h1>

<div>{{ $event->description }}</div>

<div>
    <form method="post" action="{{ route('events.registrants.store', $event) }}">
        {{ csrf_field() }}
        <button type="submit">Registrant</button>
    </form>

</div>
