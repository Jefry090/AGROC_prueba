<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use Illuminate\Http\Request;

/**
 * Class CropController
 * @package App\Http\Controllers
 */
class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crops = Crop::paginate();

        return view('crop.index', compact('crops'))
            ->with('i', (request()->input('page', 1) - 1) * $crops->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crop = new Crop();
        return view('crop.create', compact('crop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Crop::$rules);

        $crop = Crop::create($request->all());

        return redirect()->route('crops.index')
            ->with('success', 'Cultivo agregado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crop = Crop::find($id);

        return view('crop.show', compact('crop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crop = Crop::find($id);

        return view('crop.edit', compact('crop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Crop $crop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crop $crop)
    {
        request()->validate(Crop::$rules);

        $crop->update($request->all());

        return redirect()->route('crops.index')
            ->with('success', 'Cultivo actualizado con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $crop = Crop::find($id)->delete();

        return redirect()->route('crops.index')
            ->with('success', 'Cultivo eliminado con exito');
    }
}
