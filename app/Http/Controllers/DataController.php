<?php

namespace App\Http\Controllers;

use App\Interfaces\DataGeneratorInterface;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Запись в БД 1000 строк
     * 
     * @return void
     */
    public function generate(DataGeneratorInterface $dataGenerator)
    {  
       $result = $dataGenerator->generate(100);
       return response()->json([
        'success' => $result,
        'message' => $result 
            ? 'Данные успешно сгенерированы' 
            : 'Ошибка генерации'
    ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
