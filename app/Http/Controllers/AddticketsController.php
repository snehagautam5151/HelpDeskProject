<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Addticket;
use App\Models\UserticketsId;
use Illuminate\Http\Request;

class AddticketsController extends Controller
{
    public function index()
    {
        return view('addtickets');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'priority' => 'required',
            'departments' => 'required',
            'categories' => 'required',
            'agentname' => 'required',
            'attachments' => 'required',
            'descriptions' => 'required',
        ]);

        $addticket = new Addticket;
        $addticket->userid = Auth::user()->id;
        $addticket->title = $request->input('title');
        $addticket->priority = $request->input('priority');
        $addticket->departments = $request->input('departments');
        $addticket->categories = $request->input('categories');
        $addticket->agentname = $request->input('agentname');
        $addticket->descriptions = $request->input('descriptions');
        $addticket->notificationstatus = 0;

        if ($request->hasFile('attachments')) {
            $file = $request->file('attachments');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/files/', $fileName);
            $addticket->attachments = $fileName;
        }

        $addticket->save();
        $this->idscallfunction($addticket);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('addticket.index');
    }

    protected function idscallfunction(Addticket $addticket)
    {
        $addids = new UserticketsId;
        $addids->ticketid = $addticket->id;
        $addids->userid = Auth::user()->id;
        $addids->save();
    }

    public function show($id)
    {
        $ticketlist = Addticket::all();
        $user = Auth::user()->id;
        return view('addticket.ticketlist', compact('ticketlist'));
    }
}