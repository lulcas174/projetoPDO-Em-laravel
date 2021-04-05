<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listagem;
class ListaTarefaController extends Controller
{
    public function index(){
        $lista = listagem::all();
    return view('view.principal.index',compact('lista'));
    }

    public function create(Request $request){
        listagem::create([
            'tarefa'=>$request-> tarefa,
        ]);
        return redirect()->route('index');
    }

    public function delete($id){
        //ServicoxEstacao::where('estacao_id', $id)->delete();
        listagem::where('id',$id)->delete();
        return redirect()->route('index');
        }


        public function show($id){
            $lista = listagem::find($id);
            return view('view.principal.cad_lista',compact('lista'));
        }

        public function update(Request $request,$id){
                $lista = listagem::findOrFail($id);

                $lista -> update([
                    'tarefa'=> $request->tarefa,
                ]);

                return redirect()->route('index');
        }

    }

