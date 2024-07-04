<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use GuzzleHttp\Client;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\SignatureRequest;

class SiteController extends Controller
{
    public function home()
    {
        $apiUrl = env('API_COUNT');

        // Créer un client GuzzleHTTP
        $client = new Client();

        try {

            $response = $client->get($apiUrl);

            if ($response->getStatusCode() == 200) {
                $apiData = json_decode($response->getBody()->getContents(), true); // Décoder la réponse JSON en tableau associatif
    
                $data = [
                    'title' => 'Accueil',
                    'nombre_requete' => $apiData['nombre_requete'] ?? 0, // Utiliser l'opérateur null coalescent pour gérer les valeurs manquantes
                    'nombre_requete_traitee' => $apiData['nombre_requete_traitee'] ?? 0,
                    'nombre_decisions' => $apiData['nombre_decisions'] ?? 0,
                    'slides' => Slide::latest()->take(3)->get(),
                ];
    
                return view('index', $data);
            }

        } catch (\Exception $e) {
            // Gérer les exceptions (par exemple, afficher un message d'erreur)
            return redirect()->back()->withErrors('Erreur de communication avec l\'API : ' . $e->getMessage());
        }
    }
}