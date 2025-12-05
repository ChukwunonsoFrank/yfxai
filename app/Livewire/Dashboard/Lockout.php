<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Lockout extends Component
{
  public $timerCheckpoint;

  public function mount()
  {
    if (session()->has("message")) {
      $message = session()->get("message");
      $this->dispatch("lockout-message", message: $message)->self();
    }

    $this->timerCheckpoint = auth()->user()->lockout_ends_in;
  }

  public function render()
  {
    return view('livewire.dashboard.lockout');
  }
}
