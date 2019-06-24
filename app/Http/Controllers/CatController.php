<?php

namespace App\Http\Controllers;

use App\Breed;
use App\Http\Resources\Breed as BreedResources;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.thecatapi.com/v1/breeds');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        return $body;

    }

    public function filter(Request $request)
    {
        $data = new Breed();
        $client = new Client();
        $response = $client->request('GET', 'https://api.thecatapi.com/v1/breeds');
        $collection = collect(json_decode($response->getBody(), true));
        $search = $collection->filter(function ($item) use ($request) {
            return false !== stristr($item['name'], $request->name);
        });

        foreach ($search as $item) {
            $hasNameBreed = Breed::where('name', '=', $item['name'])->first();

            if ($hasNameBreed) {
                return new BreedResources($hasNameBreed);
            }

            $data->cat_id = $item['id'];
            $data->name = $item['name'];
            $data->temperament = $item['temperament'];
            $data->life_span = $item['life_span'];
            $data->alt_names =isset($item['alt_names']) ? $item['alt_names'] : '' ;
            $data->wikipedia_url = isset($item['wikipedia_url']) ? $item['wikipedia_url']: '';
            $data->origin = $item['origin'];
            $data->experimental = $item['experimental'];
            $data->hairless = $item['hairless'];
            $data->natural = $item['natural'];
            $data->rare = $item['rare'];
            $data->rex = $item['rex'];
            $data->supress_tail = $item['suppressed_tail'];
            $data->short_legs = $item['short_legs'];
            $data->hypoallergenic = $item['hypoallergenic'];
            $data->adaptability = $item['adaptability'];
            $data->affection_level = $item['affection_level'];
            $data->country_code = $item['country_code'];
            $data->child_friendly = $item['child_friendly'];
            $data->dog_friendly = $item['dog_friendly'];
            $data->energy_level = $item['energy_level'];
            $data->grooming = $item['grooming'];
            $data->health_issues = $item['health_issues'];
            $data->intelligence = $item['intelligence'];
            $data->shedding_level = $item['shedding_level'];
            $data->social_needs = $item['social_needs'];
            $data->stranger_friendly = $item['stranger_friendly'];
            $data->vocalisation = $item['vocalisation'];
            $data->save();
        }

        return $search;
    }

    public function show($id)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.thecatapi.com/v1/breeds');
        $collection = collect(json_decode($response->getBody(), true));
        $search = $collection->where('id', $id);

        return $search;
    }

}
