<?php

namespace App\Http\Controllers;
use App\Models\Addticket;
use App\Models\SendNotifications;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Notification;
use App\Notifications\SendEmailNotification;

class AllagentticketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $userName =auth()->user()->name;
       
        $ticketlists = DB::table('users')
        ->join('add_tickets','users.id','=','add_tickets.userid')
        ->select('users.*','add_tickets.*')
        ->where('add_tickets.agentname',$userName )
        ->get();

        // $sendemail = 0;
    
        return view('Agent.agentticketlist',compact('ticketlists'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notifaion = Addticket::find($id);
       
        // $userEmail =$request->email;
        $userEmail = 'niamhmach04@gmail.com';
        $userName =auth()->user()->name;
        $ticketlists = DB::table('users')
        ->join('add_tickets','users.id','=','add_tickets.userid')
        ->select('users.*','add_tickets.*')
        ->where('add_tickets.agentname',$userName )
        ->get();
       
       

        foreach( $ticketlists as $key => $value)
        {
            if( $ticketlists[$key]->id == $id ){
                $Adduserticketname = $ticketlists[$key]->name;
                $AddTickettitle = $ticketlists[$key]->title;
                $AddTicketCategory = $ticketlists[$key]->categories;
                $AddTicketUserid = $ticketlists[$key]->userid;
            }
        }

        
        

        $details=[
            'username' => $Adduserticketname,
            'ticketilte' => $AddTickettitle,
            'greeting'=>'Your ticket has been resolved',
            'body'=>'And detailed information about agent',
            'AgentName' => $userName
        ];
      
        if(Notification::route('mail', $userEmail)->notify(new SendEmailNotification($details)) == null){
           
            $notifaion->notificationstatus = 1 ;
            $notifaion->update(); 
        }

        $addNotification = new SendNotifications;
        $addNotification->type = $AddTickettitle;
        $addNotification->agentname =  $userName;
        $addNotification->data =  'Resolved';
        $addNotification->userid = $AddTicketUserid;
     
        $addNotification->save();
      
        $ticketlists = DB::table('users')
        ->join('add_tickets','users.id','=','add_tickets.userid')
        ->select('users.*','add_tickets.*')
        ->where('add_tickets.agentname',$userName )
        ->get();
        
        return view('Agent.agentticketlist',compact('ticketlists'));
        // dd('halooo',$notifaion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticketdelet = Addticket::find($id); 
        
        $ticketdelet->delete();
        toastr()->success('Data has been Delete successfully!');
        return redirect()->route('alltickets.index')->with('success'.'Tickets has been Deletes');
    }
}