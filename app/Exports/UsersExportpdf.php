<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExportpdf implements FromView, ShouldAutoSize
{
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('usuarios.pdf', [
            'users' => User::all()
        ]);
    }
}