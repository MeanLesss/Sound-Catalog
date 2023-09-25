<?php

namespace App\Http\Controllers;
use App\Models\Sound;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    public function CategoryIndex()
    {
        //
        $categories = Category::all();
        //return var_dump($sounds);
        return view('Admin/Category.index',['categories' => $categories]);
    }
    public function UserIndex()
    {
        //
        $users = User::all();
        //return var_dump($sounds);
        return view('Admin/User.index',['users' => $users]);
    }

    public function SaveCategory(Request $request) {
        if ($request->has('title')) {
            $rows = [];
            foreach ($request->input('title') as $title) {
                $rows[] = ['tagName' => $title,'created_at'=>Carbon::Now(),'updated_at'=>Carbon::Now()];
            }
            Category::insert($rows);
        }

        return redirect('/category');
    }
    public function SearchSound(Request $request)
    {
        //
        $sounds = Sound::select('sounds.*', 'u.name')
        ->join('users as u', 'sounds.userId', '=', 'u.id')
        ->where('sounds.statusApprove', -1)
        ->where('sounds.title', 'like', '%' . $request->inputSearch . '%')
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
        return redirect('/admin');
    }

}
