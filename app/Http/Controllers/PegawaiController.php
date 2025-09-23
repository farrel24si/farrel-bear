<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        $birthDate = '2003-12-11';
        $tglHarusWisuda = '2029-10-10';
        $currentSemester = 3;
        $futureGoal = 'Menjadi Business Analyst di perusahaan besar';

        $data['name']  = 'Pegawai-Kun';
        $data['my_age'] = Carbon::parse($birthDate)->age;
        $data['hobbies'] = ['Tennis','Bowling','Gaming','Gambar','Makan'];
        $data['tgl_harus_wisuda'] = $tglHarusWisuda;
        $data['time_to_study_left'] = Carbon::now()->diffInDays(Carbon::parse($tglHarusWisuda));
        $data['current_semester'] = $currentSemester;

        if ($currentSemester < 3) {
            $data['informasi'] = 'Masih Awal, Kejar TAK';
        } else {
            $data['informasi'] = 'Jangan main-main, kurang-kurangi main game!';
        }

        $data['future_goal'] = 'Menjadi Business Analyst di perusahaan besar';

        return view('pegawai', $data);
    }
}
