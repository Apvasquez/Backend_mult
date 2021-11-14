<?php

namespace App\Http\Controllers;

use App\Models\table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function multiplicacion($number)
    {

        $result [] = '';

        table::truncate();
        for($i=1;$i<=10;$i++){
            $result[$i]  = table::create([
                'numero_1' => $i,
                'numero_2' => $number,
                'resultado' => $i * $number
            ]);

        }
        $tables = table::all();

        foreach ($tables as $table) {
            $data [] = [
                'result' => $table->resultado,
                'number_1' => $table->numero_1,
                'number_2' => $table->numero_2,
            ];
        }



        // $date  = '';

        // $j =0 ;
        //     for($i =1; $i <= 10 ; $i++){

        //         $date[$j] = "$i * $number = ". $i* $number;

        //     }
        // $response = [
        //     'result' => $result

        // ];

        // return response($response, 201);
            return $tables;



    }
    public function suma($number1,$number2)
    {

        $result= $number1 + $number2;

        echo "$number1 + $number2 = ".$result ;



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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        //
    }
}
