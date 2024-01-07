<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getDataFromApi()
    {
        $idMagang = [
            '0bc91565-770a-11ee-b9a7-ca3681c4e3a0',
            'f5b7172e-77b9-11ee-923c-1684ec93b3c0',
            '98148fbb-76ce-11ee-952e-7a1feeaeb0dc',
            '6b205efc-7663-11ee-9de1-8aeaf361a2ef',
            'a03e571a-7eaa-11ee-ab34-f272ca7f57ce',
            'cd4b2f3e-7304-11ee-b3d3-ca56ea263d3b',
            '7eaef166-7477-11ee-9de1-8aeaf361a2ef',
            '2b48fb5e-7790-11ee-b9a7-ca3681c4e3a0',
            '02c4836d-71b3-11ee-883c-badd859af60d',
            '8909ef7b-7c8a-11ee-8410-5e77d93a739d',
            '6c7f0ba5-6f46-11ee-b783-1e4fc00d2885',
            '6df88b4f-6e66-11ee-883c-badd859af60d',
            '9417f8ed-88ed-11ee-bc9e-262c8946beb0',
            '3c8acff3-777f-11ee-b9a7-ca3681c4e3a0',
            'd93c11e0-777f-11ee-b9a7-ca3681c4e3a0',
            '21f3bd00-774b-11ee-b9a7-ca3681c4e3a0',
            'dcc29c60-73b0-11ee-9de1-8aeaf361a2ef',
            '391dc5ee-7610-11ee-952e-7a1feeaeb0dc',
            'df44a679-7214-11ee-b783-1e4fc00d2885',
        ];

        $data = [];

        foreach ($idMagang as $id) {
            $magangResponse = Http::get("https://api.kampusmerdeka.kemdikbud.go.id/magang/browse/position/{$id}");
            $mitraResponse = Http::get("https://api.kampusmerdeka.kemdikbud.go.id/mitra/public/id/{$magangResponse->json()['data']['activity_id']['mitra_id']}");

            $magangData = $magangResponse->json()['data'];
            $mitraData = $mitraResponse->json()['data'];

            $data[] = [
                'magang' => $magangData,
                'mitra' => $mitraData,
            ];
        }
        //dd($data);
        return view('dashboard', ['data' => $data]);
    }
}