<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mensagem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class mensagemController2 extends Controller
{
   protected function validator(array $data)
    {
        return Validator::make($data, [
            'idp' => ['required', 'string', 'max:255'],
            'aluno' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'whatsapp' => ['required', 'string', 'max:255'],
            'mensagem' => ['required', 'string', 'max:255', 'unique:users'],
        ]);
    }

     protected function send(Request $request)
    {
        $idp = $request->input('idp');
        $aluno = $request->input('aluno');
        $email = $request->input('email');
        $whatsapp = $request->input('whatsapp');
        $mensagem = $request->input('mensagem');
        $fecha = Carbon::now()->toTimeString();

        Mensagem::create([
            'idp' => $idp,
            'aluno' => $aluno,
            'email' => $email,
            'whatsapp' => $whatsapp,
            'mensagem' => $mensagem,
            'data' => $fecha,
            'status' => '0', 
        ]);

        return view('sucesso');
    }
}
