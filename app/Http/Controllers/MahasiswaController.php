<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::paginate(10);
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function search(Request $request)
	{
		$mahasiswas = Mahasiswa::where('nim', 'like', "%" . $request->keyword . "%")
            ->orWhere('name', 'like', "%" . $request->keyword . "%")
            ->paginate(10)
            ->withQueryString();

        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas, 'keyword' => $request->keyword]);
	}
}
