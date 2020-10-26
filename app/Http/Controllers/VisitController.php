<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Patient;
use App\Visit;
use App\Encounter;
use App\Http\Requests;
use Session;
use Redirect;
use DB;

class VisitController extends Controller
{
	public function newEncounter($id)
    {
        $data = Patient::findOrFail($id);
        
        $exam = Visit::where('patient_id', '=' ,$id)->first();

        $visits = DB::select('select * from visits where patient_id'.'= '.$id);

        $encounter = DB::table('visits')
            ->join('encounters', 'visits.id', '=', 'encounters.visit_id')
            ->get();

        if($exam){
            return view('patient.newencounteredit',compact('data','exam','visits','encounter'));
        } else {
            return view('patient.newencounter',compact('data'));
        }
    }


    public function insertCounter(Request $request)
    {
        // id as patient id
        $exam = Visit::where('patient_id','=', $request->patient_id)->first();

        foreach ($request->addmore as $key => $value) {
            Visit::create($value);
        }
        return Redirect::back()->with('success', 'Insurance Information of patient has been saved successfully!');
    }

    public function insertCounteredit(Request $request)
    {
        // id as patient id
        $exam = Visit::where('patient_id','=', $request->patient_id)->first();

        //$visit = DB::table('visits')->get();

        $visit = Encounter::where('visit_id', '=' ,$request->visit_id)->first();

        if($visit == null)
        {
            Encounter::create($request->except(['addmore']));
                       
        } else {
            foreach ($request->addmore as $key => $value) {Visit::create($value);
            }

        }

        return Redirect::back()->with('success', 'Insurance Information of patient has been saved successfully!');   
    }


    public function dailyCoding($id)
    {
        $data = Patient::findOrFail($id);
        return view('patient.assessmenticd', ['data' => $data]);
    }

    /*public function encounterDate($id)
    {
        $data = Visit::findOrFail($id);

        $encounter = Encounter::where('visit_id', '=' ,$id)->first();

        if($exam){
            return view('patient.newencounteredit',
                compact('visit',
                    'encounter'
            ));
        }
    }*/


}
