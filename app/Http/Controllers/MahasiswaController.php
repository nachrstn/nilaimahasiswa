<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\Semester;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $listSemester = Semester::orderBy('id', 'desc')->get();
        $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();
        $semester = Semester::find($request->semester_id);

        $listKrs = new Collection();
        if ($mahasiswa) {
            $listKrs = Krs::where('mahasiswa_id', $mahasiswa->id)
                ->where('semester_id', $request->semester_id)
                ->get();
            $ipsCalculated = $this->calcIps($listKrs);

            if ($request->is_calc_ipk == '1') {
                $ipkCalculated = $this->calcIpk($mahasiswa, $semester);
            }
        }

        return view('mahasiswa.index', [
            'selectedMahasiswa' => $mahasiswa,
            'selectedSemester' => $semester,
            'ipkCalculated' => $ipkCalculated?? 0,
            'ipsCalculated' => $ipsCalculated?? 0,
            'listSemester' => $listSemester,
            'listKrs' => $listKrs,
            'nim' => $request->nim,
            'semester_id' => $request->semester_id,
            'is_calc_ipk' => $request->is_calc_ipk?? '0',
        ]);
    }

    public function listMahasiswa(Request $request)
    {
        $mahasiswas = Mahasiswa::get();

        $sumIpk = 0;
        if ($request->is_average_ipk == '1' || $request->is_each_ipk == '1') {
            set_time_limit(300);
            foreach ($mahasiswas as $mahasiswa) {
                $ipkMahasiswa = $this->calcIpk($mahasiswa, Semester::orderBy('id', 'desc')->first());
                if ($request->is_each_ipk == '1') {
                    $mahasiswa->ipk = $ipkMahasiswa;
                }

                if ($request->is_average_ipk == '1') {
                    $sumIpk += $ipkMahasiswa;
                }
            }
        }

        return view('mahasiswa.list', [
            'mahasiswas' => $mahasiswas,
            'averageIpk' => $sumIpk / $mahasiswas->count(),
            'isAverageIpk' => $request->is_average_ipk?? '0',
            'isEachIpk' => $request->is_each_ipk?? '0',
        ]);
    }

    private function calcIpk($mahasiswa, $semester)
    {
        $jmlIps = 0;
        $listSemester = Semester::where('id', '<=', $semester->id)->orderBy('id', 'desc')->get();
        foreach ($listSemester as $semester) {
            $listKrs = Krs::where('mahasiswa_id', $mahasiswa->id)
                ->where('semester_id', $semester->id)
                ->get();

            $ips = $this->calcIps($listKrs);
            $jmlIps += $ips;
        }
        return $jmlIps / $listSemester->count();
    }

    private function calcIps($listKrs)
    {
        $totalSks = 0;
        $totalIp = 0;

        foreach ($listKrs as $krs) {
            $sks = $krs->mataKuliah->sks;

            if ($krs->nilai >= 80) {
                $nilai = 4;
            } else if ($krs->nilai >= 60) {
                $nilai = 3;
            } else if ($krs->nilai >= 40) {
                $nilai = 2;
            } else {
                $nilai = 0;
            }

            $totalSks += $sks;
            $totalIp += $sks * $nilai;
        }

        $ips = 0;
        if ($totalIp != 0) {
            $ips = $totalIp / $totalSks;
        }
        return $ips;
    }
}
