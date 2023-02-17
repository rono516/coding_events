@include('layouts.inc.topnav')

<div class="py-3 mx-2">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Contest Name</th>
                <th scope="col">Contest Link</th>
                <th scope="col">Start Time</th>
                <th scope="col">Duration</th>
                <th scope="col">In 24hrs?</th>
                <th scope="col">Coding Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leetcode as $event)
                <tr>
                    <td data-title="Contest Name">{{ $event->name }}</td>
                    <td data-title="Contest Link"> <a target="_blank" href="{{ $event->url }}">{{ $event->url }}
                        </a></td>
                    <td data-title="Start Time">{{ date('d/M/Y H:i:s', strtotime($event->start_time)) }}</td>
                    <td data-title="Duration">{{ gmdate('H:i:s', $event->duration) }}</td>
                    <td data-title="In 24hrs?">{{ $event->in_24_hours }}</td>
                    <td data-title="Coding Status">{{ $event->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
