<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;

class PerfumeController extends Controller
{
    public function getPerfumes() {

        $perfumes = Perfume::all();

        return view( "perfumes", [
            "perfumes"=> $perfumes
        ]);

    }

    public function newPerfume(Request $request) {

        return view( "new_perfume" );
    }

    public function storePerfume( Request $request ) {



        $perfume = new Perfume;

        $perfume->name = $request->name;
        $perfume->type = $request->type;
        $perfume->price = (string)$request->price;

        $perfume->save();

        return redirect( "/" );
    }

    public function editPerfume( $id ) {

        $perfume = Perfume::find( $id );

        return view( "edit_perfume", [
            "perfume" => $perfume
        ]);
    }

    public function updatePerfume( Request $request ) {
            $perfume = Perfume::where("name", $request->name)->first();
            $perfume->name = $request->name;
            $perfume->type = $request->type;
            $perfume->price = $request->price;

            $perfume->save();

            return redirect("/perfumes");
    }

    public function deletePerfume( $id ) {

        $perfume = Perfume::find( $id );
        $perfume->delete();

        return redirect( "/perfumes" );
    }
}
