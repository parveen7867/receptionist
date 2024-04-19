<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patientbed;
use App\Models\Patient;
use App\Models\Block;
use App\Models\Floor;
use App\Models\Bedd;
use App\Models\AssignBed ;



class AllotmentbedController extends Controller
{    

    public function indexassignbed(){
        $assignbed=AssignBed::all();
        return view('Allotmentbed.listalotbed',['assignbed'=>$assignbed]);
    }
    public function addalotbed(){
        $Patient = Patient::all();
        $blocks = Block::all();
        $beds = Bedd::all(); // Add this line to fetch the beds data
        return view('Allotmentbed.addalotbed', ['Patient' => $Patient, 'blocks' => $blocks, 'beds' => $beds]);
    }
    
    public function getfloors($id)
    {
        $html = '';
        $floors = Floor::where('block_id', $id)->get();
        
        foreach ($floors as $floor) {
            $html .= '<option value="' . $floor->id . '">' . $floor->floorName . '</option>';
        }
    
        return response()->json($html);
    }
    
    public function getbeds($id)
    {
        $html= '';
        $beds = Bedd::where('floor_id', $id)->get();
    
        foreach ($beds as $bed) {
            $html .= '<option value="' . $bed->id . '">' . $bed->bedsName . '</option>';
        }
    
        return response()->json($html);
    }

    function storeassignbed(Request $request){
        $validatedData = $request->validate([
          
       
                'Patient' => 'required',
                'floor_id' => 'required',
                'block_id' => 'required',
                'bedd_id' => 'required',
            ]);
            
     
        
            try {
                $assignbed = AssignBed::create([
                    'Patient_id' => $request->Patient,
                    'floor_id' => $request->floor_id,
                    'block_id' => $request->block_id,
                    'bedd_id' => $request->bedd_id,
                ]);
                
            } catch (\Exception $e) {
              
                \Log::error($e->getMessage());
         
                return redirect()
                ->route('index.assignbed')
                ->with('success','assignbed Added Sulccessfully');
 
            }
            
        
}}
    
    
    
    
    

