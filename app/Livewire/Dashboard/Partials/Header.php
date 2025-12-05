<?php

namespace App\Livewire\Dashboard\Partials;

use App\Models\Bot;
use Livewire\Component;

class Header extends Component
{
    public $accountType;

    public function mount()
    {
        $activeBot = Bot::where("user_id", "=", auth()->user()->id, "and")
            ->where("status", "=", "active", "and")
            ->first();

        $this->accountType = $activeBot ? $activeBot["account_type"] : null;
    }

    public function render()
    {
        return view("livewire.dashboard.partials.header");
    }
}
