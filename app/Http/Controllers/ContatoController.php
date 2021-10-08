<?php

namespace App\Http\Controllers;
use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     * https://laravel.com/docs/8.x/controllers#resource-controllers
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lista ordenada pelo nome : https://laravel.com/docs/8.x/eloquent#retrieving-models
        $contatos = Contato::orderBy("name")->get();

        //$categorias = Categorias::all();
        return view('contato.index', compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        dd($data);
        Contato::create($data);
        Session::flash('flash_message', 'Contato criado com sucesso! '); //messagem de sucesso!
        return redirect()->route('contatos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contato = Contato::find($id);
        return view('contato.edit', compact('contato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $contato = Contato::find($id);

        $contato->name = $request->name;
        $contato->telefone = $request->telefone;
        $contato->email = $request->email;
        $contato->save();
        Session::flash('flash_message', 'Contatos Atualizado com sucesso!');
        return redirect()->route('contatos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contato = Contato::findOrFail($id);
        $contato->delete();
        Session::flash('flash_message', 'Contato deletado com sucesso!');
        return redirect()->route('contatos.index');
    }
}
