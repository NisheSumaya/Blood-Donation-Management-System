<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Post;
use DB;

class NotificationController extends Controller
{
    public function postNotify()
    {
        $notifications = auth()->user()->notifications;

        return view ('frontend.notification.notify', compact('notifications'));
    }
    public function notifyDetails($id)
    {   
        $notify=DB::table('notifications')->where('id', $id)->first();

        $notify = json_decode($notify->data);

        return view ('frontend.notification.viewNotify', compact('notify'));
    }
    public function showlist()
    {

    $notifications = Notification::all();

return view('backend.notify.notificationList',compact('notifications'));

    }
    public function notifyDetail($id)
    {   
        $notify=DB::table('notifications')->where('id', $id)->first();

        $notify = json_decode($notify->data);

        return view ('frontend.notification.viewNotify', compact('notify'));
    }
}
