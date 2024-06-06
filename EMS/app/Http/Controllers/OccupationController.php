<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Occupation;  
use DB;  

class OccupationController extends Controller
{
    //add occupation form........
    public function add_occupation()
    {
        return view('occupation/add_occupation');
    }
     
    // view occupation form ........
    
    public function occupation(Request $request)
    {    
        $data = new Occupation;
        $data->occupation = $request->occupation;
        $data->save();

        return redirect('view_occupation');
    }

    // view all occupation......
    
    public function view_occupation()
    {
        $data = DB::table('occupations')->get(); 
        
        return view('occupation/view_occupation',['data' => $data]);
    }

    // delete occupation.........
      
    public function delete_occupation($id)
    {
        // $data = Occupation::destroy($id);
        // return redirect('/view_occupation');
        DB::table('Occupations')->where('id',$id)->delete();
        return back();
    }

    // edit occupation.........

    public function edit_occupation($id)
    {
        $data = Occupation::find($id);
        
        return view('occupation/edit_occupation',compact('data'));
    }

    // Update occupation.........
    public function update_occupation(Request $request , $id)
    {
    $data = Occupation::find($id);
    $data->occupation = $request->occupation;
    $data->save();

     return redirect('/view_occupation');
    }
  
}
