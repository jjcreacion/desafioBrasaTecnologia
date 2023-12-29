<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Resposta;
use App\Models\Mensagem;
use Carbon\Carbon;

class RespostaController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'mensagem' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create(Request $request)
    {
          
    }

    protected function update(Request $request)
    {
        $idm = $request->input('idm');
        $mensagem = $request->input('mensagem');
        $data = Carbon::now()->toTimeString();

        Resposta::create([
            'idm' => $idm,
            'mensagem' => $mensagem,
            'data' => $data,
        ]);

        $mensagem = Mensagem::findOrFail($idm);
        $mensagem->status = '1';
        $mensagem->save();

         return redirect()->route('mensagems.index')
            ->with('success', 'Mensagem enviado com sucesso');

    }

}
