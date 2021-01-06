<?php

namespace App\Http\Controllers;

use App\Sample_data;
use Illuminate\Http\Request;
use DataTables;

class SampleController extends Controller
{

    public function store(Request $request)
    {
        $Sample=Sample_data::create($request->all());
        return redirect('live_search');
    }

    public function update(Request $request, $id)
    {
        Article2::where('ID', $id)->update(['first_name'=>$request->get('first_name'), 'last_address'=>$request->get('last_address'), 'last_City'=>$request->get('last_City'), 'first_Code'=>$request->get('first_Code')
        ,'first_Country'=>$request->get('first_Country'),'exampleFormControlSelect1'=>$request->get('exampleFormControlSelect1'),'first_Total'=>$request->get('first_Total')]);
        alert('UpdateSucuess!!');
        return redirect('live_search');


   
    }
    public function BackUp()
    {
        return redirect('live_search');
    }
}
