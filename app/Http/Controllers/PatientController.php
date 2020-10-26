<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Patient;
use App\Visit;
use App\Http\Requests;
use Session;
use Redirect;
use DB;

class PatientController extends Controller
{
    public function newPatient()
    {
        $records = DB::select('select * from patients');
        return view('patient.newpatient',compact('records'));
    }

    public function insertNewpatient(Request $request)
    {
        $request->validate([

        ]);

        if (!$request->has('password')) {
            $password = str_random(8);
            $request->request->add(['password' =>($password)]);
        }

        Patient::create($request->all());
        
        return Redirect::back()->with('success', 'Insurance Information of patient has been saved successfully!');
    }

    public function delete($id) {
        DB::delete('delete from patients where id = ?',[$id]);
        return redirect()->route('patient')
            ->with('success','Patient has been deleted successfully!');
    }

    public function edit($id) {
    

    $visits = Visit::where('patient_id', $id)->get();
    $data = Patient::findOrFail($id);
    $records = DB::select('select * from patients');
    
        return view('patient.patientinfo',compact('data','visits','records'));
    }

    public function patientInfo(Request $request, $id)
    {
        $user =  Patient::findorfail($id);

        $input = $request->except([
        
        'patientphoto'
        ]);
        

       //move | upload file on server
        if($request->patientphoto)
        {
            $file      = $request->file('patientphoto');
            $extension = $file->getClientOriginalExtension(); // getting file extension
            $filename  = 'patientphoto-'.time() . '.' . $extension;
            $file->move('uploadimages', $filename);
            $input['patientphoto'] = $filename;
        }
         
        //Patient::delete( public_path('/uploadimages' . $request->patientphoto));

        $data = $user->update($input);

        return Redirect::back()->with('success', 'Insurance Information of patient has been saved successfully!');
    }

    public function familyHistory($id)
    {
        $data = Patient::findOrFail($id);
        $visits = Visit::where('patient_id', $id)->get();

        $mother=explode(",", $data->Mother);
        $father=explode(",", $data->Father);
        $sister=explode(",", $data->Sisters);
        $brother=explode(",", $data->Brothers);
        $children=explode(",", $data->Children);
        //dd( $preexisting);
        //exit;
        return view('patient.familyhistory',
            compact('data',
                    'mother',
                    'father',
                    'sister',
                    'brother',
                    'children',
                    'visits'
            ));
    }

    public function updateFamily(Request $request, $id)
    {   

        $request->merge([ 
        'Mother'    => implode(',', (array) $request->get('Mother')),
        'Father'    => implode(',', (array) $request->get('Father')),
        'Sisters'   => implode(',', (array) $request->get('Sisters')),
        'Brothers'  => implode(',', (array) $request->get('Brothers')),
        'Children'  => implode(',', (array) $request->get('Children')),
        ]);

        $input = $request->all();
        $user =  Patient::findorfail($id);
        $data = $user->update($input);
        //return redirect()->route('demo',['data' => $data])
            //->with('success','Patient has been updated successfully!.');
        return Redirect::back()->with('success', 'Family History of patient has been saved successfully!');
    }

    public function socialHistory($id)
    {
        $data = Patient::findOrFail($id);

        $visits = Visit::where('patient_id', $id)->get();
        return view('patient.socialhistory', compact('data','visits'));
    }

    public function UdateSocialhistory(Request $request, $id)
    {
        $input = $request->all();
        $user =  Patient::findorfail($id);
        $data = $user->update($input);
        return Redirect::back()->with('success', 'Social History of patient has been saved successfully!');
    }

    public function preexistingConditions($id)
    {   
        $data = Patient::findOrFail($id);
        $visits = Visit::where('patient_id', $id)->get();
        $preexisting=explode(",", $data->preexisting);
        //dd( $preexisting);
        //exit;
        return view('patient.preexistingconditions',compact('data','preexisting','visits'));
    }

    public function updatePreexistingconditions(Request $request, $id)
    {   
        $request->merge([ 
            'preexisting'    => implode(',', (array) $request->get('preexisting')),
        ]);
        
        $input = $request->all();
        $user =  Patient::findorfail($id);
        $data = $user->update($input);
        return Redirect::back()->with('success', 'Pre existing conditions of patient has been saved successfully!');
    }


    public function insuranceInfo($id)
    {
        $data = Patient::findOrFail($id);
        $visits = Visit::where('patient_id', $id)->get();
        return view('patient.insuranceinfo', compact('data','visits'));
    }

    public function udateInsuranceinfo(Request $request, $id)
    {
        $input = $request->all();
        $user =  Patient::findorfail($id);
        $data = $user->update($input);
        return Redirect::back()->with('success', 'Social History of patient has been saved successfully!');
    }

    public function manage($id)
    {
        $data = Patient::findOrFail($id);
        $visits = Visit::where('patient_id', $id)->get();
        return view('patient.manage',compact('data','visits'));
    }




    public function deletePhoto($id)
    {   
        $imagePath = Patient::select('patientphoto')->where('id', $id)->first();

        $filePath = $imagePath->patientphoto;
        if (file_exists($filePath)) {
            unlink($filePath);

           Patient::where('id', $id)->delete();

        }else{

        Patient::where('id', $id)->delete();
        }

        return Redirect::back()->with('success', 'Pre existing conditions of patient has been saved successfully!');
    }




}
