<?php

namespace App\Livewire\Admin;

use App\Models\DepositIntent;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]

class AdminDepositIntent extends Component
{
  use WithPagination;

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
