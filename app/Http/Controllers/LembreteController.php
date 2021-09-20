<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lembretes;
use Carbon\Carbon;

class LembreteController extends Controller {

    /* Chamar todos os usuarios */

    public function index() {
    
        $lembretes = Lembretes::all();
        return \response($lembretes );
    }

    /* Salva todos os usuarios e valida os campos */

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

    /* Mostra os usuarios pelo ID */

    public function show($id) {
       
        $lembretes = Lembretes:: findOrFail($id);
        return \response($lembretes);
    }

    /* Atualiza os usuarios pelo ID */

    public function update(Request $request, $id) {

        $lembretes = Lembretes:: findOrFail($id)->
        update($request->all());
        return \response($lembretes);
    }

    /* Apaga um usuario pelo ID (o usuario fica salvo na BD devido ao Softdelete) */
    
    public function destroy($id) {

        Lembretes::destroy($id);
        return \response(content: "Tarefa apagada");
    }
}
