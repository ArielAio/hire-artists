<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Contratado;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{

    public function welcome(){
        return view('artistas.welcome');
    }

    public function index()
    {
        $artistas = Artista::all();
        // dd($artista);
        return view('artistas.index', ['artistas' => $artistas]);
    }
    public function create()
    {
       return view('artistas.create');
    }
    public function store(Request $request)
{
    // Valide os dados do formulário
    $validatedData = $request->validate([
        'nome' => 'required',
        'categoria' => 'required',
    ]);

    $artista = Artista::create($validatedData);

    return redirect()->route('artistas.index');
}

    public function edit($id)
    {
        $artistas = Artista::where('id', $id)->first();
        if(!empty($artistas))
        {
            return view('artistas.edit', ['artistas' =>$artistas]);
        }
        else{
            return redirect()->route('artistas.index');
        }
    }
    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria
        ];
        Artista::where('id',$id)->update($data);
        return redirect()->route('artistas.index');
    }
    public function destroy($id)
    {
        Artista::where('id',$id)->delete();
        return redirect()->route('artistas.index');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('q');

        $artistas = Artista::where('nome', 'LIKE', "%$searchTerm%")->orWhere('categoria', 'LIKE', "%$searchTerm%")->get();

        return view('artistas.index', compact('artistas'));
    }


    public function contratar($id)
    {
        $artista = Artista::findOrFail($id);
        return view('contratacao.contratar', compact('artista'));
    }

    public function cadastro(Request $request)
    {
    // Valide os dados do formulário
    $validatedData = $request->validate([
        'artista_id' => 'required|exists:artistas,id',
        'nome_artista' => 'required',
        'categoria_artista' => 'required',
        'nome_contratante' => 'required',
        'cache' => 'required',
        'data_evento' => 'required|date',
        'endereco' => 'required',
    ]);


        Contratado::create([
            'artista_id' => $validatedData['artista_id'],
            'nome_artista' => $validatedData['nome_artista'],
            'categoria_artista' => $validatedData['categoria_artista'],
            'nome_contratante' => $validatedData['nome_contratante'],
            'cache' => $validatedData['cache'],
            'data_evento' => $validatedData['data_evento'],
            'endereco' => $validatedData['endereco'],
        ]);
        return view('contratacao.aviso');
}

    public function lista(){
        $contratados = Contratado::all();
        return view('contratacao.lista', ['contratados' => $contratados]);
    }

}
