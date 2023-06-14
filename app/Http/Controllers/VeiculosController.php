<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $veiculos = Veiculo::all()->toArray();
    
        return view('selecao',
        ['lista'=> $veiculos]
        );
    }
    public function indexAdmin()
    {
        $veiculos = Veiculo::all()->toArray();
    
        return view('Administrativo.visualizar',
        ['lista'=> $veiculos]
        );
    }


    public function create()
    {
        return view('Administrativo.inserir');
    }

    public function store(Request $request)
    {
        Veiculo::create([
            'fabricante' => $request->fabricante,
            'modelo'=> $request->modelo,
            'veiculo'=> $request->veiculo,
            'categoria'=> $request->categoria,
            'preco'=> $request->preco,
            'disponibilidade'=> $request->disponibilidade,
        ]);
        return "Veiculo cadastrado com sucesso!";
    }

    public function edit(string $id)
    {
        $veiculo = Veiculo::find($id);
    return view('Administrativo.editar', 
    ['veiculo' => $veiculo ]
    );
        return redirect('/visualizar') ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
           $veiculo = Veiculo::findOrFail($id);
           $veiculo -> update([
           'fabricante' => $request->fabricante,
           'modelo'=> $request->modelo,
           'veiculo'=> $request->veiculo,
           'categoria'=> $request->categoria,
           'preco'=> $request->preco,
           'disponibilidade'=> $request->disponibilidade,
           ]);

        return redirect('/visualizar') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('Administrativo.excluir', 
    ['veiculo' => $veiculo ]);
    }
    public function destroy(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();
        return redirect('/visualizar') ;
    }
}
