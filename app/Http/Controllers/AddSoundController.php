<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sound;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddSoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('Sound.addSound');
        $categories = Category::pluck('tagName','tagName')->all();
        return view(
            'Sound.addSound',
            [
                'Sound' => new Sound(),
                'categories' => $categories
            ]
        );
    }
    public function editPage(int $id)
    {
        $categories = Category::pluck('tagName','tagName')->all();
        $sound = Sound::where('id',$id)->first();
        return view(
            'Sound.addSound',
            [
                'sound' => $sound,
                'categories' => $categories
            ]
        );
    }
    public function submitEdit(Request $request)
    {
        $edit = $request->validate([
            'id' =>'required',
            'title' => 'required',
            'category' => 'required',
        ]);

        if($edit){
            $found = Sound::where('id',$request->id)->first();
            $found->title = $request->title;
            $found->description = $request->description;
            $found->category = $request->category;
            $found->save();
        }

        //return var_dump($sounds);
        if(Auth::user()->role == -1){
            $sounds = Sound::select('sounds.*', 'u.name')
            ->join('users as u', 'sounds.userId', '=', 'u.id')
            ->get();
            return view('Admin/Sound.index',['sounds' => $sounds,'category'=>Category::pluck('tagName','tagName')->all()]);
        }else{
            $sounds = Sound::select('sounds.*', 'u.name')
            ->join('users as u', 'sounds.userId', '=', 'u.id')
            ->where('sounds.statusApprove',-1)
            ->get();
            return view('Sound.index',['sounds' => $sounds,'category'=>Category::pluck('tagName','tagName')->all()]);
        }
    }
    public function submitDelete(int $id)
    {
        if($id != null && $id !='' & $id > 0)
        {
            Sound::where('id',$id)->first()->delete();
        }
        $sounds = Sound::select('sounds.*', 'u.name')
        ->join('users as u', 'sounds.userId', '=', 'u.id')
        ->where('sounds.statusApprove',-1)
        ->get();
        //return var_dump($sounds);
        if(Auth::user()->role == -1){
            return view('Admin/Sound.index',['sounds' => $sounds,'category'=>Category::pluck('tagName','tagName')->all()]);
        }else{
            return view('Sound.index',['sounds' => $sounds,'category'=>Category::pluck('tagName','tagName')->all()]);

        }
    }
    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $upload = $request->validate([
            'soundPath' => 'required',
            'title' => 'required',
            'category' => 'required',
        ]);

        //$request->soundPath->store('sounds');
        $sound = new Sound($request->all());
        // $file = $request->file("soundPath");
        //var_dump($sound);
        // sleep(5);
        if ($request->file('soundPath') != null) {
            $fname = $request->file('soundPath');
            $originalname = $request->file('soundPath')->getClientOriginalName();
            $request->file('soundPath')->move(public_path() . '/sounds', $originalname);
            $sound->soundPath = 'sounds\\' . $originalname;
        } else {
            $sound->soundPath = 'sounds\\Losing Sound.mp3';
        }
        // //image path get

        if ($request->file('imagePath') != null) {
            // $iname = $request->file('imagePath');
            $originalname = $request->file('imagePath')->getClientOriginalName();
            $request->file('imagePath')->move(public_path() . '/images', $originalname);
            $sound->imagePath = '/images/' . $originalname;
        } else {
            $sound->imagePath = '/images/default.png';
        }

        $sound->userId = Auth::User()->id;
        $sound->statusApprove = 0;
        if ($sound->save()) {
            if (Auth::User()->role == -1) {
                // return view('Admin/Sound.index');
                return redirect(route('admin'))->with('status', 'Block is created');
            } else {
                // return view('Home.index');
                return redirect(route('sound'))->with('status', 'Block is created');
            }
        } else {
            return back()->withInput()->with('statuses', $sound->getErrors());
        }


        //saving to soundCate

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
