<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

/**
 * Class AnimalController
 * @package App\Http\Controllers
 */
class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::paginate();

        return view('animal.index', compact('animals'))
            ->with('i', (request()->input('page', 1) - 1) * $animals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animal = new Animal();
        return view('animal.create', compact('animal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Animal::$rules);

        $animal = Animal::create($request->all());

        return redirect()->route('animals.index')
            ->with('success', 'Animal agregado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = Animal::find($id);

        return view('animal.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::find($id);

        return view('animal.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Animal $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        request()->validate(Animal::$rules);

        $animal->update($request->all());

        return redirect()->route('animals.index')
            ->with('success', 'Animal actualizado con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $animal = Animal::find($id)->delete();

        return redirect()->route('animals.index')
            ->with('success', 'Animal eliminado con exito');
    }
}
