<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExportpdf;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Concerns\Exportable;
use Dompdf\DOMPDF;



class UserControllerpdf extends Controller

{
    public function ExportAllpdfUsers(){
        return Excel::download(new UsersExportpdf, 'usuarios.pdf');
       /* return (new UsersExportpdf)->download('users.pdf', Excel::DOMPDF); */
    }
}