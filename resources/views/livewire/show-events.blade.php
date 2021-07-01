<div class="row d-flex justify-content-between">
    <div class="col">
        <h2>Event</h2>
    </div>

    <div class="col-auto">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a type="button" class="btn btn-warning" href="/events">
                Return
            </a>
        </div>
    </div>

    <hr>

    <h3>Name: {{ $data->name }}</h3>
    <h3>Description: {{ $data->description }}</h3>
    <h3>Date: {{ $data->date }}</h3>
    <h3>Time: {{ $data->time }}</h3>
    <h3>All day event: {{ $data->allDay ? 'true' : 'false'}}</h3>
    <h3>Recurrence: {{ $data->recurrence }}</h3>

</div>
