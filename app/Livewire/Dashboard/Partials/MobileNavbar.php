<?php

namespace App\Livewire\Dashboard\Partials;

use App\Models\Bot;
use Livewire\Component;

class MobileNavbar extends Component
{
    public function robot()
    {
        $activeBot = Bot::where("user_id", "=", auth()->user()->id, "and")
            ->where("status", "=", "active", "and")
            ->first();

        if ($activeBot) {
            $this->redirectRoute("dashboard.robot.traderoom");
        } else {
            $this->redirectRoute("dashboard.robot");
        }
    }

    public function render()
    {
        return view("livewire.dashboard.partials.mobile-navbar");
    }
}
