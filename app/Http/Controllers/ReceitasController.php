<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReceitasController extends Controller
{
    public function receitasApi()
    {
        $response = Http::get('https://gold-anemone-wig.cyclic.app/receitas/todas');

        $receitas = $response->json();

        return view('receitas' , ['receitas' => $receitas]);
    }
    public function mostrarReceita($id)
    {
        $response = Http::get('https://gold-anemone-wig.cyclic.app/receitas/' .$id);

        $receita = $response->json();
        return view('receita', ['receita' => $receita]);

    }
    public function tipoReceita($tipo)
        {
            $response = Http::get('https://gold-anemone-wig.cyclic.app/receitas/tipo/' .$tipo);

            $receitas = $response->json();

            return view('tipo_receita', ['receitas' => $receitas]);
        }
}
