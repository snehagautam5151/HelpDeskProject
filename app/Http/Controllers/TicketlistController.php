<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Addticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TicketlistController extends Controller
{
    public function index()
    {
        $userid= Auth::user()->id;
        $ticketlists= Addticket::all();

        $ticketlists = DB::table('users')
        ->join('add_tickets','users.id','=','add_tickets.userid')
        ->select('users.*','add_tickets.*')
        ->where('add_tickets.userid',$userid )
        ->get();
        return view('ticketlist',compact('ticketlists'));
         
    }
    public function destroy($id)
    {
        $ticketdelet = Addticket::find($id); 

        $ticketdelet->delete();
        toastr()->success('Data has been Delete successfully!');
        return redirect()->route('ticketlist.index');
    }
}