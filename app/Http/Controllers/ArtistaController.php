<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Contratado;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{

    // Displays the welcome view
    public function welcome(){
        return view('artistas.welcome');
    }

    // Displays the list of artists
    public function index()
    {
        $artistas = Artista::all();
        return view('artistas.index', ['artistas' => $artistas]);
    }

    // Displays the form to create a new artist
    public function create()
    {
       return view('artistas.create');
    }

    // Stores the newly created artist data
    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'nome' => 'required',
            'categoria' => 'required',
        ]);

        $artista = Artista::create($validatedData);

        return redirect()->route('artistas.index');
    }

    // Displays the form to edit an artist
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

    // Updates the artist data
    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria
        ];
        Artista::where('id',$id)->update($data);
        return redirect()->route('artistas.index');
    }

    // Deletes an artist
    public function destroy($id)
    {
        Artista::where('id',$id)->delete();
        return redirect()->route('artistas.index');
    }

    // Searches for artists
    public function search(Request $request)
    {
        $searchTerm = $request->input('q');

        $artistas = Artista::where('nome', 'LIKE', "%$searchTerm%")->orWhere('categoria', 'LIKE', "%$searchTerm%")->get();

        return view('artistas.index', compact('artistas'));
    }

    // Displays the form to hire an artist
    public function contratar($id)
    {
        $artista = Artista::findOrFail($id);
        return view('contratacao.contratar', compact('artista'));
    }

    // Stores the data of the hired artist
    public function cadastro(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'artista_id' => 'required|exists:artistas,id',
            'nome_artista' => 'required',
            'categoria_artista' => 'required',
            'nome_contratante' => 'required',
            'cache' => 'required',
            'data_evento' => 'required|date',
            'endereco' => 'required',
        ]);

        // Create new entry for the hired artist
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

    // Displays the list of hired artists
    public function lista(){
        $contratados = Contratado::all();
        return view('contratacao.lista', ['contratados' => $contratados]);
    }

}