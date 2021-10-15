<?php

namespace App\Http\Controllers;

use App\Models\Records;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Records::all();
        return view('records.index', compact('records'));
    }

    public function forPublic()
    {
        $records = Records::all();
        return view('forPublic', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('records.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'authorName'=>'required|max:255',
            'bookName'=>'required|max:255',
            'amountBooks'=>'required|max:255'
            ]);
        $records = new Records([
           'authorName' => $request -> get('authorName'),
           'bookName' => $request -> get('bookName'),
            'amountBooks' => $request -> get('amountBooks')
        ]);
        $records ->save();
        return redirect('/records')->with('success', 'Добавлено!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Records  $records
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = Records::find($id);


        return view('records.show', compact('records'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Records  $records
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = Records::find($id);

        return view('records.edit', compact('records'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Records  $records
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'authorName'=>'required|max:255',
            'bookName'=>'required|max:255',
            'amountBooks'=>'required|max:255'
        ]);
        $records = Records::find($id);
        $records -> authorName = $request -> get('authorName');
        $records ->bookName = $request -> get('bookName');
        $records ->amountBooks = $request -> get('amountBooks');
        $records -> save();

        return redirect('/records')->with('success', 'Запись редактирована!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Records  $records
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $records = Records::find($id);
        $records ->delete();
        return redirect('/records')->with('success', 'Удалено!');
    }
}
