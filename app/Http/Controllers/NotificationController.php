<?php
namespace App\Http\Controllers;
use App\Models\SendNotifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NotificationController extends Controller
{
    public function index()
    {
        $userid= Auth::user()->id;
        $Notificationlist = DB::table('users')
        ->join('notifications','users.id','=','notifications.userid')
        ->select('users.*','notifications.*')
        ->where('notifications.userid',$userid )
        ->get();
        return view('notification',compact('Notificationlist'));
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Notificationlist = SendNotifications::find($id);
        $Notificationlist->delete();
        toastr()->success('Data has been Delete successfully!');
        return redirect()->route('notification.index')->with('success'.'Tickets has been Deletes');
    }
}