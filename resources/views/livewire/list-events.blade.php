<div>

    <div class="row d-flex justify-content-between">
        <div class="col">
            <h2>Events</h2>
        </div>

        <div class="col-auto">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a type="button" class="btn btn-primary" href="/events/create">
                    Add
                </a>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">All day</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $event)
            <tr>
                <th>{{$event->name}}</th>
                <th>{{$event->description}}</th>
                <th>{{$event->date}}</th>
                <th>{{$event->time}}</th>
                <th>{{ $event->allDay ? 'true' : 'false' }}</th>
                <td>
                    <button type="button" class="btn btn-link" wire:click="show('{{$event->id}}')">
                        <span class="material-icons">visibility</span>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
