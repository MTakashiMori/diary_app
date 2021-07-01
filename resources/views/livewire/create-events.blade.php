<div>

    <div class="row d-flex justify-content-between">
        <div class="col">
            <h2>Create event</h2>
        </div>

        <div class="col-auto">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a type="button" class="btn btn-danger" href="/events">
                    Cancel
                </a>
            </div>
        </div>
    </div>

    <form wire:submit.prevent="submit">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" wire:model="name" aria-describedby="name" placeholder="Enter event name" required>
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description"  wire:model="description" aria-describedby="description" placeholder="Enter event description" required>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control" id="date" aria-describedby="date" placeholder="Enter event date" required wire:model="date">
            @error('date') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="time">Time</label>
            <input type="text" class="form-control" id="time" aria-describedby="time" placeholder="Enter time event" required wire:model="time">
            @error('time') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="recurrence">Recurrence</label>
            <input type="text" class="form-control" id="recurrence" aria-describedby="recurrence" placeholder="Enter event recurrence" wire:model="recurrence">
            @error('recurrence') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-check">
            <label class="form-check-label" for="allDay">All day event</label>
            <input type="checkbox" class="form-check-input" id="allDay" wire:model="allDay">
            @error('allDay') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="d-flex flex-row-reverse">
            <div class="btn-group" role="group" aria-label="Basic example">

                <div class="text-right">

                    <a type="button" class="btn btn-danger" href="/events">
                        Cancel
                    </a>

                    <button type="submit" class="btn btn-primary float-right">Submit</button>

                </div>
            </div>
        </div>

    </form>

</div>
