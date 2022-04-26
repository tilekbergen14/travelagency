<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Place;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        $places = Place::orderBy("updated_at", "desc")->paginate(10);
        return view('admin.index', ["places" => $places]);
    }
    public function createplace_get()
    {
        $place = null;
        return view('admin.createplace', ["place" => $place]);
    }
    public function createplace_post(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "price" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg"
        ]);
        $imagePath = $request->existedImage ?? null;
        if ($request->image) {
            $imageName = time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/thumbnails'), $imageName);
            if ($imagePath) {
                File::delete(public_path($imagePath));
            }
            $imagePath = "/images/thumbnails/" . $imageName;
        }
        Place::create([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "image" => $imagePath
        ]);
        return back();
    }
    public function deleteplace(Place $place)
    {
        $place->delete();
        return back();
    }
    public function contact_get()
    {
        $connections = Connection::orderBy("created_at", "desc")->paginate(10);
        return view('admin.contact', ["connections" => $connections]);
    }
    public function delete_connect(Connection $connect)
    {
        $connect->delete();
        return back();
    }
}
