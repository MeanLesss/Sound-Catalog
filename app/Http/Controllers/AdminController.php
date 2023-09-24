<?php

namespace App\Http\Controllers;
use App\Models\Sound;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        //
        $sounds = Sound::select('sounds.*', 'u.name')
        ->join('users as u', 'sounds.userId', '=', 'u.id')
        ->orderBy('sounds.statusApprove','desc')
        ->get();
        //return var_dump($sounds);
        return view('Admin/Sound.index',['sounds' => $sounds]);
    }
    public function SoundApproval(int $soundID)
    {
        $sound = Sound::where('id',$soundID)->first();
        if ($sound) {
            if($sound->statusApprove == 0){
                $sound->statusApprove = -1;
            }else{
                $sound->statusApprove = 0;
            }
            $sound->save();
        }
        return $this->index();
    }

}
