<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TugasController extends Controller
{
    public function menu()
    {
        $response = Http::get('http://tes-web.landa.id/intermediate/menu');

        if ($response->successful()) {
            $datamenu = $response->json();
            return view('tugas', ['data' => $datamenu]);
        } else {
            abort(500, 'Gagal mengambil data dari API.');
        }
    }


    public function minuman()
    {
        $response = Http::get('http://tes-web.landa.id/intermediate/menu');

        if ($response->successful()) {
            $datamenu = $response->json();
            $dataminuman = [];

            // Filter data untuk hanya mendapatkan kategori minuman
            foreach ($datamenu as $item) {
                if ($item['kategori'] === 'minuman') {
                    $dataminuman[] = $item;
                }
            }

            return view('tugas', ['dataminuman' => $dataminuman]);
        } else {
            abort(500, 'Gagal mengambil data dari API.');
        }
    }
 
    public function DataMakanan()
    {
        $response = Http::get('http://tes-web.landa.id/intermediate/menu');

        if ($response->successful()) {
            $datamenu = $response->json();
            $datamakanan = [];

            // Filter data untuk hanya mendapatkan kategori makanan
            foreach ($datamenu as $item) {
                if ($item['kategori'] === 'makanan') {
                    $datamakanan[] = $item;
                }
            }

            return view('tugas', ['datamakanan' => $datamakanan]);
        } else {
            abort(500, 'Gagal mengambil data dari API.');
        }
    }




    // public function transaksi1()
    // {
    //     $response = Http::get('https://tes-web.landa.id/intermediate/transaksi?tahun=2021');

    //     if ($response->successful()) {
    //         $datatr = $response->json();
    //         return view('tugas', ['data' => $datatr]);
    //     } else {
    //         abort(500, 'Gagal mengambil data dari API.');
    //     }
    // }

    //     public function transaksi2()
    // {
    //     $response = Http::get('https://tes-web.landa.id/intermediate/transaksi?tahun=2022');

    //     if ($response->successful()) {
    //         $data = $response->json();
    //         return view('tugas', ['data' => $data]);
    //     } else {
    //         abort(500, 'Gagal mengambil data dari API.');
    //     }
    // }

    // public function transaksi2(Request $request)
    // {
    //     $tahun = $request->input('tahun'); // Ambil tahun dari input permintaan

    //     // Periksa apakah tahun yang dikirim sesuai dengan yang diizinkan (2021 atau 2022)
    //     if ($tahun != '2021' && $tahun != '2022') {
    //         abort(400, 'Tahun yang diminta tidak valid.');
    //     }

    //     $response = Http::get('https://tes-web.landa.id/intermediate/transaksi?tahun=' . $tahun);

    //     if ($response->successful()) {
    //         $data = $response->json();
    //         return view('tugas', ['data' => $data]);
    //     } else {
    //         abort(500, 'Gagal mengambil data dari API.');
    //     }
    // }
}
