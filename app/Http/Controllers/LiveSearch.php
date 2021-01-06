<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
   function index()
   {
       return view('Live_Search');
   }
   function test()
   {
       return view('test');
   }

   function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('laravelwalk')
         ->where('first_name', 'like', '%'.$query.'%')
         ->orWhere('last_address', 'like', '%'.$query.'%')
         ->orWhere('last_City', 'like', '%'.$query.'%')
         ->orWhere('first_Code', 'like', '%'.$query.'%')
         ->orWhere('first_Country', 'like', '%'.$query.'%')
         ->orWhere('exampleFormControlSelect1', 'like', '%'.$query.'%')
         ->orWhere('first_Total', 'like', '%'.$query.'%')
         ->orWhere('updated_at', 'like', '%'.$query.'%')
         ->orWhere('created_at', 'like', '%'.$query.'%')
         ->orderBy('ID', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('laravelwalk')
         ->orderBy('ID', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
     
         <td>'.$row->first_name.'</td>
         <td>'.$row->last_address.'</td>
         <td>'.$row->last_City.'</td>
         <td>'.$row->first_Code.'</td>
         <td>'.$row->first_Country.'</td>
         <td>'.$row->exampleFormControlSelect1.'</td>
         <td>'.$row->first_Total.'</td>
         <td>'.$row->updated_at.'</td>
         <td>'.$row->created_at.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="8">找不到相關訂單</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}

