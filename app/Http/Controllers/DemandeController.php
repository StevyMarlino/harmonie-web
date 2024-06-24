<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Encryption\Encrypter;
use App\Http\Requests\SignatureRequest;
use Illuminate\Support\Facades\Session;

class DemandeController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Vos Demandes/Demanches',
        ];
        return view('demandes.index', $data);
    }

    public function roleAndCode(){
        $data = [
            'title' => 'Vos Demandes/Demanches',
        ];
        return view('demandes.search-by-code-phone', $data);
    }

    /**
     * Display a listing of the resource.
     */
    public function search(SignatureRequest $request, Encrypter $encrypter)
    {
        $apiUrl = env('API_SIMPLE_SEARCH');
        $clientSearchUrl = env('CLIENT_SEARCH_URL');

        // Valider la requête
        $request->validate([
            'signature' => 'required|string',
        ]);

        // Créer un client GuzzleHTTP
        $client = new Client();

        try {
            // Faire une requête POST à l'API
            $response = $client->post($apiUrl, [
                'json' => [
                    'signature' => $request->signature,
                ],
            ]);

            // Vérifier si la requête a réussi
            if ($response->getStatusCode() == 200) {
                // Récupérer directement les données du litige
                $litige = json_decode($response->getBody()->getContents());

                if(!$litige){
                    return redirect()->back()->withErrors('Signature incorrecte ou Requête introuvable');
                }

                // Encrypter les données du litige
                $encryptedLitige = $encrypter->encrypt(json_encode($litige));

                // Rediriger vers l'URL de l'autre projet avec les données encryptées du litige
                return redirect()->away($clientSearchUrl . '?litige=' . urlencode($encryptedLitige));
            } else {
                // Gérer les erreurs (par exemple, afficher un message d'erreur)
                return redirect()->back()->withErrors('Requête introuvable');
            }
        } catch (\Exception $e) {
            // Gérer les exceptions (par exemple, afficher un message d'erreur)
            return redirect()->back()->withErrors('Erreur de communication avec l\'API : ' . $e->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function searchLitigeByRoleAndPhone(Request $request, Encrypter $encrypter)
    {
        $apiUrl = env('API_SEARCH_URL');
        $clientSearchUrl = env('CLIENT_SEARCH_URL');

        // Valider la requête
        $request->validate([
            'role' => 'required|string',
            'phone' => 'required|string',
        ]);

        // Créer un client GuzzleHTTP
        $client = new Client();

        try {
            // Faire une requête POST à l'API
            $response = $client->post($apiUrl, [
                'json' => [
                    'role' => $request->role,
                    'phone' => $request->phone,
                ],
            ]);
            
            // Vérifier si la requête a réussi
            if ($response->getStatusCode() == 200) {
                // Récupérer directement les données du litige
                $litige = json_decode($response->getBody()->getContents());

                if(!$litige){
                    return redirect()->back()->withErrors('Code ou numéro introuvable');
                }

                // Encrypter les données du litige
                $encryptedLitige = $encrypter->encrypt(json_encode($litige));

                // Rediriger vers l'URL de l'autre projet avec les données encryptées du litige
                return redirect()->away($clientSearchUrl . '?litige=' . urlencode($encryptedLitige));
            } else {
                
                // Gérer les erreurs (par exemple, afficher un message d'erreur)
                return redirect()->back()->withErrors('Requête introuvable');
            }
        } catch (\Exception $e) {
            // Gérer les exceptions (par exemple, afficher un message d'erreur)
            return redirect()->back()->withErrors('Erreur de communication avec l\'API : ' . $e->getMessage());
        }
    }
}
