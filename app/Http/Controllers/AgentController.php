<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addticket;
use Illuminate\Support\Facades\DB;
class AgentController extends Controller
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
        ->orderByDesc('add_tickets.id')
        ->limit(10)
        ->get();

        

    
        return view('Agent.newticketslist',compact('ticketlists'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
        return redirect()->route('agent.index');
    }
}
