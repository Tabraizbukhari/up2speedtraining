<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Patient;
use App\Visit;
use App\SOAP;
use App\Exam;
use App\Http\Requests;
use Session;
use Redirect;
use DB;

class SOAPController extends Controller
{

	public function soap($id)
    {
    	$data = Visit::findOrFail($id);
        //$visit = Visit::where('patient_id', '=' ,$id)->first();
        //dd($visit);
        //$exit;
        //$exam = Exam::where('patient_id', '=' ,$id)->firstOrFail();
        
        $exam = SOAP::where('visit_id', '=' ,$id)->first();
        
        if($exam){
            $improved = explode(",", $exam->Improved);
        //dd($improved);
        //;
        $worsened = explode(",", $exam->Worsened);
            return view('patient.subjective',compact('data','exam','improved','worsened'));
        } else {
            return view('patient.subjectiveedit',compact('data'));
        }
    }


    public function subjective($id)
    {
    	$data = Patient::findOrFail($id);
    	$records = soap::where('patient_id', $id)->get();
    	$visits = Visit::all();
        $exam = Exam::where('patient_id', '=' ,$id)->firstOrFail();
        $improved = explode(",", $exam->Improved);
        $worsened = explode(",", $exam->Worsened);
        if($exam){
            return view('patient.subjective',compact('data',
                'exam','improved','worsened'
                
            )
        );

        } else {
            return view('patient.subjectiveedit',compact('data'));
        }
        
    }


    public function insertSoap(Request $request)
    {
    	$request->merge([ 
        'Improved'    => implode(',', (array) $request->get('Improved')),
        'Worsened'    => implode(',', (array) $request->get('Worsened')),
        'chiefcomplaints'    => implode(',', (array) $request->get('chiefcomplaints')),

        ]);

        $input = $request->all();
        
        // id as patient id
        $exam = SOAP::where('visit_id','=', $request->visit_id)->first();


        //create record if empty
        if($exam == null) {
            
            $article = SOAP::create($request->all());
            return Redirect::back()->with('success', 'Visit has been added!');
        } else {    //update previous record

            $input = $request->all();
            $data = $exam->update($input);
            return Redirect::back()->with('success', 'Insurance Information of patient has been saved successfully!');
        }
    }


    public function dailyCoding($id)
    {
        $data = Patient::findOrFail($id);
        //$exam = Exam::where('patient_id', '=' ,$id)->firstOrFail();
        $exam = SOAP::where('patient_id', '=' ,$id)->first();
        if($exam){
            return view('patient.assessmenticd',compact('data','exam'));
        } else {
            return view('patient.assessmenticd',compact('data'));
        }
    }


    public function exercises($id)
    {
        $data = Patient::findOrFail($id);
        //$exam = Exam::where('patient_id', '=' ,$id)->firstOrFail();
        $exam = SOAP::where('patient_id', '=' ,$id)->first();
        if($exam){
            return view('patient.exercises',compact('data','exam'));
        } else {
            return view('patient.exercises',compact('data'));
        }
    }


    public function exerciseEditor($id)
    {
        $data = Patient::findOrFail($id);
        //$exam = Exam::where('patient_id', '=' ,$id)->firstOrFail();
        $exam = SOAP::where('patient_id', '=' ,$id)->first();
        if($exam){
            return view('patient.exerciseeditor',compact('data','exam'));
        } else {
            return view('patient.exerciseeditor',compact('data'));
        }
    }
}
