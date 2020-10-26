<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Patient;
use App\Client;
use App\Http\Requests;
use Session;
use Redirect;
use DB;
use App\Package;
use App\Visit;

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
    public function index(Request $request)
    {   
      //fetch patient data
        $records = DB::select('select * from patients');
        return view('patient.index',['records'=>$records]);
      
    }


    public function datatable(Request $request)
    {   
      //fetch patient data
        $records = DB::select('select * from patients');
        return view('patient.datatable',['records'=>$records]);
      
    }

    public function portalHome()
    {
        return view('patient.portalhome');
    }
    
    public function admin()
    {
        $records = DB::select('select * from patients');
        return view('patient.admin',
            compact('records'));
    }

    public function progress($id)
    {
        $data = Patient::findOrFail($id);
        $visits = Visit::where('patient_id', $id)->get();

        return view('patient.assessmenticd', compact('data','visits'));
       
    }

    public function algorithm ($id)
    {
        $data = Patient::findOrFail($id);
        $visits = Visit::where('patient_id', $id)->get();

      return view('patient.newencounter',compact('data','visits'));
    }
    public function scheduler1()
    {
        return view('patient.scheduler');
    }

    public function addClient()
    {
        $patients = DB::select('select * from patients');
        $records = DB::select('select * from clients');
        return view('patient.addclient',
            compact('patients','records'));
    }

    public function insertCleint(Request $request)
    {
        $request->validate([

            //'first_name' =>'required',
            //'last_name' => 'required',
            //'phone'     => 'required',
            //'email'     => 'required',

        ]);
        if (!$request->has('invite_code')) {
            $invite_code = str_random(8);
            $request->request->add(['invite_code' =>($invite_code)]);
        }

        Client::create($request->all());
            return redirect()->route('addclient');
    }
        //return view('patient.addclient')

}
