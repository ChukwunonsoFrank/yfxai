<?php

namespace App\Livewire\Admin;

use App\Models\Deposit;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Layout("components.layouts.admin")]
class AdminDepositDetails extends Component
{
  #[Url]
  public $id;

  public $deposit;

  public string $paymentMethod;

  public string $amount;

  public string $paymentScreenshotPath;

  public string $status;

  public function mount()
  {
    $this->deposit = Deposit::with("user")->where("id", $this->id)->first();

    $this->paymentMethod = $this->deposit["payment_method"];
    $this->amount = $this->deposit["amount"];
    $this->paymentScreenshotPath = $this->deposit["payment_screenshot_path"];
    $this->status = $this->deposit["status"];
  }

  public function getStatusIndicatorColor(string $status)
  {
    if ($status === "pending") {
      return "bg-warning-50 text-warning-600";
    }

    if ($status === "approved") {
      return "bg-success-50 text-success-600";
    }

    if ($status === "declined") {
      return "bg-error-50 text-error-600";
    }
  }

  public function render()
  {
    return view('livewire.admin.admin-deposit-details');
  }
}
