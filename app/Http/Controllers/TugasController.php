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
        // $response = Http::get('http://tes-web.landa.id/intermediate/menu');


        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://tes-web.landa.id/intermediate/menu',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = json_decode(curl_exec($curl)) ;

        curl_close($curl);
        // echo $response;


        if ($response) {
            // $datamenu = $response->json();
            // $datamakanan = [];

            // // Filter data untuk hanya mendapatkan kategori makanan
            // foreach ($datamenu as $item) {
            //     if ($item['kategori'] === 'makanan') {
            //         $datamakanan[] = $item;
            //     }
            // }

            return view('tugas', ['datamakanan' => $response]);
        } else {
            abort(500, 'Gagal mengambil data dari API.');
        }
    }




    public function transaksi($tahun)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://tes-web.landa.id/intermediate/menu',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = json_decode(curl_exec($curl)) ;

    curl_close($curl);
    // echo $response;


    if ($response) {
        $datamakanan = $response;
    } else {
        $datamakanan = [];
    }



    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://tes-web.landa.id/intermediate/transaksi?tahun=' . $tahun,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    $datatr = json_decode($response, true);
    return view('tugas', ['trans' => $datatr,'datamakanan'=>$datamakanan]);

    // if ($httpCode == 200) {
    //     $datatr = json_decode($response, true);
    //     return view('tugas', ['datatr' => $datatr]);
    // } else {
    //     abort($httpCode, 'Gagal mengambil data dari API.');
    // }
}

}
