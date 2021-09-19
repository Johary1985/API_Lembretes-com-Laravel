<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lembretes;

class LembreteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
        $lembretes = Lembretes::all();
        return \response($lembretes );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

       $request->validate ([
           'usuario' => 'required',
           'titulo' => 'required',
           'descricao' => 'required',
           'repetir' => 'required',
       ]);

       $lembretes = Lembretes::create($request->all());

       return \response($lembretes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
       
        $lembretes = Lembretes:: findOrFail($id);
        return \response($lembretes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $lembretes = Lembretes:: findOrFail($id)->
        update($request->all());
        return \response($lembretes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        Lembretes::destroy($id);
        return \response(content: "Tarefa apagada");
    }
}
