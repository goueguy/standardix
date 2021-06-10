<?php

namespace App\Http\Livewire;

use App\Models\Notification;
use Livewire\Component;

class NotificationComponent extends Component
{
    public $status = false;
    public $content = "";

    public function render()
    {
        return view('livewire.notification-component',[
            "notifs"=>Notification::all()
        ]);
    }
}
