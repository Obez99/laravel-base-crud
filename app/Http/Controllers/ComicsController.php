<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view("home.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("home.new_comic");
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
            "title" => "required|string|unique:comics,title",
            "description" => "required|string|max:2500",
            "thumb" => "nullable|active_url",
            "price" => "nullable|numeric",
            "series" => "required|string|max:100",
            "sale_date" => "nullable|date",
            "type" => "required|string|max:50",
        ]);

        $data = $request->all();

        $newComic = new Comic;
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route("comics.index");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("home.comic_details", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("home.edit_comic", compact("comic"));
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
        $request->validate([
            "title" => "string||unique:comics,title",
            "description" => "string|max:2500",
            "thumb" => "nullable|active_url",
            "price" => "nullable|numeric",
            "series" => "string|max:100",
            "sale_date" => "nullable|date",
            "type" => "string|max:50",
        ]);
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
