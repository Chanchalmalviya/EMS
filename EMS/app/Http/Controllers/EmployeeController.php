<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;  
use App\Models\Occupation; 
use DB;                                                                              

class EmployeeController extends Controller
{
    
    public function addemployee()
    {
        $data = Occupation::get();
        return view('addemployee',compact('data'));
       
       
    }

    public function employeeadd(Request $request)
    {
        //validate data
        $request->validate([
            'name'=> 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'experience'=>'required',
            'occupation_id'=>'required',
            
        ]);
        //upload image 
        $imageName =time().'.'.$request->image->extension();
        $request->image->move(public_path('employeeimage'), $imageName);

        $data = new Employee;

        $data->name = $request->name;
        $data->image = $imageName;
        $data->experience = $request->experience;
        $data->occupation_id = $request->occupation_id;
        $data->save();
         
        return redirect('/home');
        
    }

  
    // view employee details.........

    // public function records()
    // {
    //     //$records =Employee::all();
    //     $records = DB::table('employees')->get(); 
    //     return view('index', ['records' => $records]);
    // }

    // edit employee details .....

    public function editemployee($id){

        $record = Employee::find($id);
        $data = Occupation::get();
        return view('editemployee',compact('record','data'));

    }

    // update employee.......

    public function updateemployee(Request $request , $id){

        $imageName =time().'.'.$request->image->extension();
        $request->image->move(public_path('employeeimage'), $imageName);

        $record = Employee::find($id);

        $record->name = $request->name;
        $record->image = $imageName;
        $record->experience = $request->experience;
        $record->occupation_id = $request->occupation_id;
        $record->save();

        return redirect('/home');
        

    }


    // delete employee details......

    public function deleteemployee($id){
          
        $record = Employee::destroy($id);

        return redirect('/home');
    }
}
