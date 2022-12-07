<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ClientsController extends Controller
{

    /**
     * Função que busca a API do parceiro e retorna os dados dos clientes
     *
     * @return array
     */
    public function index()
    {
        $response = Http::get('https://api.jsonbin.io/v3/b/638e47036a51bc4f70488d28');

        return $response->json($key = null);

    }
}
