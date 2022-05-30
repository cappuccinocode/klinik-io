<?php

namespace App\Http\Controllers\API;

use App\Helpers\APIFormatter;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

class WilayahController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $request = Request::create('http://dev.farizdotid.com/api/daerahindonesia/provinsi', 'GET');
        // // $request->headers->set('Authorization', 'Bearer '.'your_api_token');
        // $response = Route::dispatch($request);
        // $responseBody = json_decode($response->getContent(), true);

        // return $responseBody;
        $result = '';
        $client = new Client;
        $url = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi';
        $response = $client->request('GET', $url, [
            'verify'  => false,
            'timeout' => 10000,
        ]);

        $provincesBody = json_decode($response->getBody());
        foreach ($provincesBody->provinsi as $province) {
            $url = 'http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='.$province->id;
            $response = $client->request('GET', $url, [
                'verify'  => false,
                'timeout' => 10000,
            ]);

            $citiesBody = json_decode($response->getBody());
            foreach ($citiesBody->kota_kabupaten as $city) {
                $url = 'http://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota='.$city->id;
                $response = $client->request('GET', $url, [
                    'verify'  => false,
                    'timeout' => 10000,
                ]);

                $result = $result."\n"
                    .$province->id.';'.$province->nama.';'
                    .$city->id.';'.$city->nama.';';

                // $kecamatansBody = json_decode($response->getBody());
                // foreach ($kecamatansBody->kecamatan as $kecamatan) {
                //     $url = 'http://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan='.$kecamatan->id;
                //     $response = $client->request('GET', $url, [
                //         'verify'  => false,
                //         'timeout' => 10000,
                //     ]);

                //     $result = $result."\n"
                //     .$province->id.';'.$province->nama.';'
                //     .$city->id.';'.$city->nama.';'
                //     .$kecamatan->id.';'.$kecamatan->nama.';';

                //     // $kelurahansBody = json_decode($response->getBody());
                //     // foreach ($kelurahansBody->kelurahan as $kelurahan) {
                //     //     $result = $result."\n"
                //     //         .$province->id.';'.$province->nama.';'
                //     //         .$city->id.';'.$city->nama.';'
                //     //         .$kecamatan->id.';'.$kecamatan->nama.';'
                //     //         .$kelurahan->id.';'.$kelurahan->nama.';';
                //     // }
                // }
            }
        }

        return $result;
    }
}
