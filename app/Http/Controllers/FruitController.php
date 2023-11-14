<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use App\Models\Fruit;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Mail;
use App\Models\Clase;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Fruit::all();
    }

    public function pdf()
    {
        $frutas = Fruit::all();
        $pdf = PDF::loadView('documento',['frutas'=>$frutas]);
        return $pdf->download('documento.pdf');
        //return view('documento',compact('frutas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $fruta = new Fruit();
        $fruta->name = $request->name;
        $fruta->description = $request->description;
        $fruta->imagen = $request->imagen;
        $fruta->amount = $request->amount;

        $fruta->save();
    }

    public function correo(Request $request)
    {
        $datos =[
            'name'=>'Manzana',
            'description'=>'Fruta dulce de color rojo',
            'amount'=>'89'
        ];
        $correo = new testMail($request->all());
        Mail::to('jesusjesus95@hotmail.com')->send($correo);
    
        return redirect()->route('index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
