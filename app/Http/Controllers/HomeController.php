<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clients =Client::all();
        return view('home',['clients'=>$clients]);
    }
    public function indexCl()
    {
        $clients =Client::all();
        redirect('/client');
        return view('home',['clients'=>$clients]);
        
    }
    public function storeCl(){
        $data=request()->validate([
            'nom'=>'required|alpha',
            'prenom'=>'required|alpha',
            'email'=>'required|email',
            'telephone'=>'required|digits:8',
        ]);
        
        Client::create($data);
        session()->flash('message','Client est ajouté');
        
        return back();
    }
   public function destroyCl($id) {
    $client = Client::findOrFail($id);
 
    $client->delete(); 
 
    \Session::flash('flash_message_delete','client successfully deleted.');
 
    return back();
        }
}
