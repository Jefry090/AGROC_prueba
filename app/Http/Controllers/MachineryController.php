<?php

namespace App\Http\Controllers;

use App\Models\Machinery;
use Illuminate\Http\Request;

/**
 * Class MachineryController
 * @package App\Http\Controllers
 */
class MachineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machineries = Machinery::paginate();

        return view('machinery.index', compact('machineries'))
            ->with('i', (request()->input('page', 1) - 1) * $machineries->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $machinery = new Machinery();
        return view('machinery.create', compact('machinery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Machinery::$rules);

        $machinery = Machinery::create($request->all());

        return redirect()->route('machineries.index')
            ->with('success', 'Maquinaria agregada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $machinery = Machinery::find($id);

        return view('machinery.show', compact('machinery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $machinery = Machinery::find($id);

        return view('machinery.edit', compact('machinery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Machinery $machinery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Machinery $machinery)
    {
        request()->validate(Machinery::$rules);

        $machinery->update($request->all());

        return redirect()->route('machineries.index')
            ->with('success', 'Maquinaria actualizada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $machinery = Machinery::find($id)->delete();

        return redirect()->route('machineries.index')
            ->with('success', 'Maquinaria eliminada con exito');
    }
}
