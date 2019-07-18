<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use App\Nivel;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $qs = Curso::all();
        // return $qs;

        $rs= Curso::with([
            'niveles'
        ])->get();

        return $rs;

        // $curso= Curso::with([
        //     'niveles'
        // ])->find($curso);
        // return $curso;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $niveles = Nivel::all();

        return view('cursos.crearcurso', compact('niveles') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->curso = $request['curso'];
        $curso->descripcion = $request['descripcion'];
        $curso->imagen = $request['imagen'];
        $curso->save();
        return redirect('cursos/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        $curso->load([

            'niveles',
        ]);
        return $curso;

        // return $curso;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        $niveles = Nivel::all();

        return view('cursos/editar', ['curso' => $curso], compact('niveles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $curso->curso = $request['curso'];
        $curso->descripcion = $request['descripcion'];
        $curso->imagen = $request['imagen'];
        $curso->save();
        return redirect('cursos/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect('cursos/lista');
    }

    public function list(){

        $rs= $this->index();
        return view('cursos.listacurso', ['rs'=> $rs]);
    }
}
