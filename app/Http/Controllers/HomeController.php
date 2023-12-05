<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('inicio');
    }

    public function otraPagina()
    {
        // Especifica la ruta al archivo cacert.pem
        $cacertPath = storage_path('app/cacert.pem');

        // LLamada a la api usando certificado
        $response = Http::withOptions([
            'verify' => $cacertPath,
        ])->get('https://xeno-canto.org/api/2/recordings?query=cnt:guatemala');

        // Llama exitosa exitosa api
        if ($response->successful()) {
            // Datos obtenidos de la llamada JSON
            $apiData = $response->json();

            // Pasando datos a la vista
            return view('otra-pagina', ['apiData' => $apiData]);
        } else {
            // En caso de error,respuesta
            $errorMessage = $response->status() . ' ' . $response->reason();
            return view('error', ['errorMessage' => $errorMessage]);
        }
    }
}
