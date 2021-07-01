<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class ShowEvents extends Component
{

    private $event;

    public function render()
    {
        return view('livewire.show-events', ['data' => $this->event]);
    }

    public function mount($id)
    {
        $this->event = Event::find($id);
    }
}
