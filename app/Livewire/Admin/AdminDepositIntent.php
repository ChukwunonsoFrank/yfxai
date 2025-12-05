<?php

namespace App\Livewire\Admin;

use App\Models\DepositIntent;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]

class AdminDepositIntent extends Component
{
  public function render()
  {
    $depositIntents = DepositIntent::with('user')->whereHas('user', function ($query) {
      $query->where('is_admin', 0);
    })->latest()->paginate(10);
    return view('livewire.admin.admin-deposit-intent', [
      'depositIntents' => $depositIntents
    ]);
  }
}
