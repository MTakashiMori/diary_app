<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class CreateEvents extends Component
{

    public $name;

    public $description;

    public $date;

    public $time;

    public $allDay;

    public $recurrence;

    protected $rules = [
        'name' => 'required|min:6',
        'description' => 'required',
        'date' => 'required',
        'time' => 'required',
        'allDay' => 'required',
        'recurrence' => '',
    ];

    public function render()
    {
        return view('livewire.create-events');
    }

    public function submit()
    {

        $this->validate();

        Event::create([
            'name' => $this->name,
            'description' => $this->description,
            'date' => $this->date,
            'time' => $this->time,
            'allDay' => $this->allDay,
            'recurrence' => $this->recurrence,
        ]);

        return redirect()->to('/events');
    }
}
