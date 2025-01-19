<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HelloController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $student = Student::all();
        return view('hallo', compact('student'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());
        if ($student) {
            return redirect()->route('Hallo')->with('status', 'Berhasil menambah data');
        }
        return redirect()->back()->with('status', 'Gagal menambah data');
    }

    public function edit($id)
    {   
        $student = Student::find($id); // Mengambil data siswa berdasarkan ID
        return view('edit', compact('student')); // Pastikan hanya mengembalikan satu siswa
    }

    public function update(Request $request, $id)
    {
        // Mencari siswa berdasarkan ID
        $student = Student::find($id);
        $student->update($request->all());
        if ($student) {
            return redirect()->route('Hallo')->with('status', 'Berhasil mengupdate data')->with('type', 'success');
        }
        return redirect()->route('Hallo')->with('status', 'Gagal mengupdate data')->with('type', 'danger');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('detail', compact('student'));
    }

    public function destroy($id)
{
    $student = Student::find($id);
    
    if ($student) {
        $student->delete();
        return redirect()->back()->with('status', 'Berhasil menghapus data');
    }

    return redirect()->back()->with('error', 'Data tidak ditemukan');
}

}
