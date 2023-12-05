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

        // Realiza la llamada a la API utilizando el certificado
        $response = Http::withOptions([
            'verify' => $cacertPath,
        ])->get('https://xeno-canto.org/api/2/recordings?query=cnt:guatemala');

        // Verifica si la llamada a la API fue exitosa
        if ($response->successful()) {
            // Obtén los datos de la respuesta JSON
            $apiData = $response->json();

            // Puedes pasar estos datos a la vista de la siguiente manera
            return view('otra-pagina', ['apiData' => $apiData]);
        } else {
            // En caso de error, maneja la respuesta de la API según sea necesario
            $errorMessage = $response->status() . ' ' . $response->reason();
            return view('error', ['errorMessage' => $errorMessage]);
        }
    }
}
