<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExportxlsx ;
use App\Exports\UsersExportpdf;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\Exportable;
use Dompdf\DOMPDF;



class UserController extends Controller

{

    public function ExportAllxlsxUsers(){
        return Excel::download(new UsersExportxlsx, 'usuarios.xlsx');
       /* return (new UsersExportpdf)->download('users.pdf', Excel::DOMPDF); */
    }


    public function ExportAllpdfUsers(){
        return Excel::download(new UsersExportpdf, 'usuarios.pdf');
       /* return (new UsersExportpdf)->download('users.pdf', Excel::DOMPDF); */
    }


}