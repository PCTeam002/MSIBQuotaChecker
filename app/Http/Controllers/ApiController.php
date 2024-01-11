<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getDataMagangFromApi(Request $request)
    {
        $dataMagang = [];

        $rawData = $request->experience;
        $dataMagang = array_filter(array_map('trim',explode(',', $rawData)));

        $data = [];

        foreach ($dataMagang as $id) {
            try {
                $magangResponse = Http::get("https://api.kampusmerdeka.kemdikbud.go.id/magang/browse/position/{$id}");
                $mitraResponse = Http::get("https://api.kampusmerdeka.kemdikbud.go.id/mitra/public/id/{$magangResponse->json()['data']['activity_id']['mitra_id']}");

                $magangData = $magangResponse->json()['data'];
                $mitraData = $mitraResponse->json()['data'];

                $data[] = [
                    'magang' => $magangData,
                    'mitra' => $mitraData,
                ];
            } catch (\Exception $e) {
                continue;
            }
        }

        return view('dashboardMagang', ['data' => $data]);
    }

    public function getDataStudiIndependenFromApi(Request $request) {
        $dataSI = [];
        $rawData = $request->experience;
        $dataSI = array_filter(array_map('trim',explode(',', $rawData)));

        $data = [];

        foreach ($dataSI as $id) {
            try {
                $siResponse = Http::get("https://api.kampusmerdeka.kemdikbud.go.id/studi/browse/activity/{$id}");
                $mitraResponse = Http::get("https://api.kampusmerdeka.kemdikbud.go.id/mitra/public/id/{$siResponse->json()['data']['mitra_id']}");

                $siData = $siResponse->json()['data'];
                $mitraData = $mitraResponse->json()['data'];

                $data[] = [
                    'si' => $siData,
                    'mitra' => $mitraData,
                ];
            } catch (\Exception $e) {
                continue;
            }
        }

        return view('dashboardStudiIndependen', ['data' => $data]);
    }
}