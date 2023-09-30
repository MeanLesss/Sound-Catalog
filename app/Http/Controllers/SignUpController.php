<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Sound;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $id)
    {
        //
        if($id == null || $id <= 0){
            return view('Home.signup', ['user' => new User()]);
        }else{
            $user = User::where('id',$id)->first();
            return view('Home.signup', ['user' => $user]);
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'confirmPassword' => ['required'],
        ]);
        if ($request->password == $request->confirmPassword) {
            $user = new User($request->all());
            $user->password = Hash::make($request->password);
            $user->statusBan = 0;
            // $user->save();
            if ($user->save()) {
                if(!empty(Auth::user()->role) && Auth::user()->role == -1){
                    return redirect()->route('users')->with('status', 'Sign up successfully');
                }else{
                    return redirect()->route('login')->with('status', 'Sign up successfully');
                }
            }else {
                return back()->withInput()->with('statuses', $user->getErrors());
            }
        }
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
    public function update(Request $request)
    {
        //
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
        ]);
        $user = User::where('id',$request->id)->first();

        if ($user != null) {
             $user->name = $request->name;
             $user->email = $request->email;
            $user->save();
            if ($user->save()) {
                if(Auth::user()->role == -1){
                         //
                    $sounds = Sound::select('sounds.*', 'u.name')
                    ->join('users as u', 'sounds.userId', '=', 'u.id')
                    ->orderBy('sounds.statusApprove','desc')
                    ->get();
                    //return var_dump($sounds);
                    return view('Admin/Sound.index',['sounds' => $sounds,'category'=>Category::pluck('tagName','tagName')->all()]);
                }else{
                    return redirect()->route('sound')->with('status', 'Update successfully');
                }
            }else {
                return back()->withInput()->with('statuses', $user->getErrors());
            }
        }
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
