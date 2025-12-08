<?php

namespace App\Livewire\Dashboard;

use App\Models\Deposit;
use App\Models\DepositIntent;
use App\Models\User;
use App\Notifications\DepositInitiated;
use App\Notifications\DepositIntentInitiated;
use App\Notifications\TransactionOccured;
use Illuminate\Support\Facades\Notification;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Renderless;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Layout("components.layouts.app")]
class ConfirmDeposit extends Component
{
  #[Url]
  public $amount;

  #[Url]
  public $method;

  #[Url]
  public $address;

  #[Url]
  public $iconUrl;

  #[Url]
  public $slug;

  public $amountToPay;

  public $hasUserMadeTwoSuccessfulDeposits = false;

  public function mount()
  {
    $this->amountToPay = $this->amount / 100;

    $confirmedCount = Deposit::where("user_id", "=", auth()->id(), "and")
      ->where("status", "confirmed")
      ->count();

    $this->hasUserMadeTwoSuccessfulDeposits = $confirmedCount >= 2;
  }

  public function back()
  {
    $this->redirect("/dashboard/deposit");
  }

  public function createDeposit()
  {
    try {
      Deposit::create([
        "user_id" => auth()->user()->id,
        "payment_method" => $this->method,
        "amount" => $this->amount,
        "status" => "pending",
      ]);

      /**
       * Send notifications to respective correspondents.
       */
      $user = User::find(auth()->user()->id, ["*"]);
      $user->notify(
        new DepositInitiated(
          auth()->user()->name,
          strval($this->amount / 100),
        ),
      );

      Notification::route("mail", "fredbest230@gmail.com")->notify(
        new TransactionOccured(
          "deposit",
          $user["name"],
          strval($this->amount / 100),
        ),
      );

      session()->flash(
        "message",
        "Deposit successful. You will receive an email when deposit has been confirmed.",
      );

      $this->redirectRoute("dashboard.transactions");
    } catch (\Exception $e) {
      $this->dispatch("deposit-error", message: $e->getMessage())->self();
    }
  }

  #[Renderless]
  public function storeDepositIntent()
  {
    try {
      DepositIntent::create([
        "user_id" => auth()->user()->id,
        "name" => auth()->user()->name,
        "amount" => $this->amount,
        "payment_method" => $this->method,
      ]);
    } catch (\Exception $e) {
      $this->dispatch("deposit-error", message: $e->getMessage())->self();
    }
  }

  public function formatAmountToPay()
  {
    return '$' . strval($this->amountToPay) . " USD";
  }

  public function render()
  {
    return view("livewire.dashboard.confirm-deposit");
  }
}
