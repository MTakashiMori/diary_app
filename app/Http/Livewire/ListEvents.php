<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class ListEvents extends Component
{
    public function render()
    {
        return view('livewire.list-events', [ 'data' => $this->all() ]);
    }

    public function all()
    {
        return Event::all();
    }

    public function show($id)
    {
        return redirect()->to('/events/' . $id);
    }
}
