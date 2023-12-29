<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Illuminate\Http\Request;

/**
 * Class MensagemController
 * @package App\Http\Controllers
 */
class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensagems = Mensagem::paginate(10);

        return view('mensagem.index', compact('mensagems'))
            ->with('i', (request()->input('page', 1) - 1) * $mensagems->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mensagem = new Mensagem();
        return view('mensagem.create', compact('mensagem'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mensagem::$rules);

        $mensagem = Mensagem::create($request->all());

        return redirect()->route('mensagems.index')
            ->with('success', 'Mensagem created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensagem = Mensagem::find($id);

        return view('mensagem.show', compact('mensagem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mensagem = Mensagem::find($id);

        return view('mensagem.edit', compact('mensagem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mensagem $mensagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensagem $mensagem)
    {
        request()->validate(Mensagem::$rules);

        $mensagem->update($request->all());

        return redirect()->route('mensagems.index')
            ->with('success', 'Mensagem updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mensagem = Mensagem::find($id)->delete();

        return redirect()->route('mensagems.index')
            ->with('success', 'Mensagem deleted successfully');
    }
}
