<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; // Import model Employee
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $pageTitle = 'Item List';
        // $employees = Employee::all(); // Mengambil semua data employee dari database

        return view('employee.index', ['pageTitle' => $pageTitle,
        // 'employees' => $employees
    ]);
    }

    public function create()
    {
        $pageTitle = 'Input Item';

        return view('employee.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute wajib diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'unique' => ':Attribute harus unik'
        ];

        $validator = Validator::make($request->all(), [
            'kodebarang' => 'required|unique:employees', // Validasi ke tabel employees
            'namabarang' => 'required',
            'hargabarang' => 'required|numeric',
            'deskripsi' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data employee ke dalam database menggunakan Eloquent
        $employee = new Employee;
        $employee->kodebarang = $request->input('kodebarang');
        $employee->namabarang = $request->input('namabarang');
        $employee->hargabarang = $request->input('hargabarang');
        $employee->deskripsi = $request->input('deskripsi');
        $employee->save();

        // Redirect ke halaman employee list
        return redirect()->route('employees.index')->with('success', 'Employee data has been saved successfully.');
    }

    public function edit(string $id)
    {
        $pageTitle = 'Edit Employee';

        $employee = DB::table('employees')
            ->where('id', $id)
            ->first();

        $positions = DB::table('positions')->get();

        return view('employee.edit', compact('pageTitle', 'employee', 'positions'));
    }

}
