<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class imageControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view("images");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($propertyId)
    {
        $imagenes = Image::all()->where("property_id", "=", $propertyId);
        return view("images", ["propertyId" => $propertyId, "imagenes" => $imagenes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $archivo = Storage::put("", $request->imagen);
        $nuevaImagen = new Image();
        $nuevaImagen->property_id = $request->property_id;
        $nuevaImagen->image_url = $archivo;
        $nuevaImagen->save();

        return redirect("/form-imagenes/" . $request->property_id);
    }

    /**
     * Display the specified resource.
     */
    public function show($filename)
    {
        if (!Storage::exists($filename)) {
            abort(404); // Image not found
        }

        $file = Storage::get($filename);
        $type = Storage::mimeType($filename);

        return response($file, 200)->header('Content-Type', $type);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
