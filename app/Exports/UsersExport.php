<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use DB;

class UsersExport implements FromCollection, ShouldAutoSize, WithHeadings, WithStyles
{   

    public function headings(): array
    {
        return [
            'ID',
            'Full Name',
            'Email',
            'Status',
            'Role',
            'Created At'
        ];
    }


    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],

            // Styling a specific cell by coordinate.
            'A' => ['font' => ['bold' => true]],

            // Styling an entire column.
            // 'C'  => ['font' => ['size' => 16]],
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {   
        $users = DB::table('users')
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->select('users.id', 'users.name', 'users.email', 'users.status', 'roles.name as Role', 'users.created_At')
            ->get();
            
        return $users;
        // dd($users);
    }




}
