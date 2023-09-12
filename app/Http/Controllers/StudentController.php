<?php

namespace App\Http\Controllers;

use App\Charts\studentChart;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function index() {
        return view('grade');
    }

    public function show(studentChart $chart) {
        $data = student::all();
        return view('grade', ['data' => $data, 'chart' => $chart->build()]);
    }

    public function calculateGrade(Request $request) {

        $nama = $request->nama;
        $nim = $request->nim;
        $quiz = $request->quiz;
        $tugas = $request->tugas;
        $absen = $request->absen;
        $praktek = $request->praktek;
        $uas = $request->uas;

        $validate_data = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'quiz' => 'required|numeric|max:100',
            'tugas' => 'required|numeric|max:100',
            'absen' => 'required|numeric|max:100',
            'praktek' => 'required|numeric|max:100',
            'uas' => 'required|numeric|max:100'
        ]);

        $insert = new student();
        $insert->nama = $nama;
        $insert->nim = $nim;
        $insert->quiz = $quiz;
        $insert->tugas = $tugas;
        $insert->absen = $absen;
        $insert->praktek = $praktek;
        $insert->uas = $uas;
        $insert->nilai_akhir = ($quiz * 0.1) + ($tugas * 0.2) + ($absen * 0.1) + ($praktek * 0.3) + ($uas * 0.3);
        if ($insert->nilai_akhir >= 85) {
            $insert->grade = 'A';
        } else if ($insert->nilai_akhir >= 75) {
            $insert->grade = 'B';
        } else if ($insert->nilai_akhir >= 65) {
            $insert->grade = 'C';
        } else {
            $insert->grade = 'D';
        }
        $insert->save();

        return redirect('/')->with('success', 'Post Uploaded Successfully');
    }
}
