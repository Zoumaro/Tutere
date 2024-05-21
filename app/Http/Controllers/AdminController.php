<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Chambre; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('home.index');
            }

            else if($usertype == 'admin'){
                return view('admin.index');
            }

            else{
                return redirect()->back();
            }
        }
    }

    public function home(){
        return view('home.index');
    }

    public function create_chambre(){
        return view('admin.create_chambre');
    }

    public function ajout_chambre(Request $request) {
        $data = new Chambre();
        $data->NoChambre = $request->NoChambre;
        $data->Cacteristiqueschambre = $request->Cacteristiqueschambre;
        $data->Statutchambre = $request->Statutchambre;
        $data->Typechambre = $request->Typechambre;
        $image=$request->image; 

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('chambre',$imagename);    

            $data->image=$imagename;        
            $data->image=$imagename;
        }
        $data->save();

        return redirect()->back();  
    }
}
