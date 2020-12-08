<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;

class UserController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImportExport()
    {
       return view('file-import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
        //$data = Excel::import(new UsersImport, $request->file('file')->store('temp'));

        $rows = Excel::toArray(new UsersImport, $request->file('file'));
        $aa = response()->json(["row"=>$rows]);
        //dump($rows[0][0][0]);
        dump($rows[0]);
        //return view('import_excel')->with('a',$aa);
        //return response()->json(["rows"=>$rows]);


        //echo ($rows[0][0][0]);
        //return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }    
}