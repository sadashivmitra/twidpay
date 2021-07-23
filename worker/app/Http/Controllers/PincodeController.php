<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pincode;

class PincodeController extends Controller
{
    //
    
    public function index()
    {
        
        $pincodes = Pincode::all();
       
        return $pincodes;
        // return view('pincode_show')->with('pincodes');
        
    }
    

    public function storePincode($delimiter=','){
        

           $filename = 'http://data.gov.in/sites/default/files/all_india_pin_code.csv';

           $file = fopen ( $filename, 'r' );

           if (($handle = $file) !== FALSE) {
                $count = 0;
                while ( ($row = fgetcsv ( $handle, 1000, $delimiter )) !== FALSE ) {
                   
                    $count++;
                    if ($count > 1) { 
                        $csv_data = new Pincode ();
                        $csv_data->officename = $row[0];
                        $csv_data->pincode = $row[1];
                        $csv_data->officeType = $row[2];
                        $csv_data->Deliverystatus = $row[3];
                        $csv_data->divisionname = $row[4];
                        $csv_data->regionname = $row[5];
                        $csv_data->circlename = $row[6];
                        $csv_data->Taluk = $row[7];
                        $csv_data->Districtname = $row[8]; 
                        $csv_data->statename = $row[9];  
                        
                        $csv_data->save ();
                    }
                }
                fclose ($handle);
           }
           return $row;
        
    }

}
