<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class NotificationController extends Controller
{
    public function index(Request $request){

        $user = $this->userConnected();
        return view("frontend.candidats.notifications",compact('user'));
    }
    public function read(Request $request){
        $user = $this->userConnected();
        $id = $user->unreadNotifications[0]->id;
        Notification::where('id',$id)->update(['read_at' => now()]);
        return back()->with('success','Ce message a été marqué comme lu');
    }

    protected function userConnected(){
        return User::where("id",Auth::id())->first();
    }

}
