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
        return view('Admin/Sound.index',['sounds' => $sounds,'category'=>Category::pluck('tagName','tagName')->all()]);
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
        $users = User::where('role','<>','-1')->get();
        //return var_dump($sounds);
        return view('Admin/User.index',['users' => $users]);
    }
    public function BanUser(int $id)
    {
        $user = User::where('id',$id)->first();
        $user->statusBan = $user->statusBan == 0 ? 1 : 0;
        $user->save();
        return redirect()->action([AdminController::class, 'UserIndex']);
    }


    public function SubmitEdit(int $id)
    {
        $user = User::where('id',$id)->first();
        // $user->statusBan = $user->statusBan == 0 ? 1 : 0;
        $user->save();
        return redirect()->action([AdminController::class, 'UserIndex']);
    }
    public function DeleteUser(int $id)
    {
        $user = User::where('id',$id)->first()->delete();

        return redirect()->action([AdminController::class, 'UserIndex']);
    }
  /**
   * The DeleteCategory function deletes a category with the specified ID and returns the index view
   * for the admin category page.
   *
   * @param int id The parameter "id" is an integer that represents the ID of the category that needs
   * to be deleted.
   *
   * @return a view called 'Admin/Category.index'.
   */
    public function DeleteCategory(int $id) {
        Category::where('id',$id)->first()->delete();
        return view('Admin/Category.index',['categories' => Category::all()]);
    }
    public function EditCategory(int $id,string $changes) {
        // return var_dump([$id,$changes]);
        $category = Category::find($id);
        if ($category) {
            $category->tagName = $changes;
            $category->updated_at = Carbon::now();
            $category->save();
        }
        return view('Admin/Category.index',['categories' =>  Category::all()]);
    }

    public function SaveCategory(Request $request) {
        if ($request->has('title')) { //Create
            $rows = [];
            foreach ($request->input('title') as $title) {
                $rows[] = ['tagName' => $title,'created_at'=>Carbon::Now(),'updated_at'=>Carbon::Now()];
            }
            Category::insert($rows);
        }else{ //Update
            if ($request->has('editInput')) {
                $id = $request -> input('editInput');
                return var_dump($id);
            }
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
        ->orWhere('sounds.category', 'like', '%' . $request->inputSearch . '%')
        ->get();
        //return var_dump($sounds);
        return view('Admin/Sound.index',['sounds' => $sounds,'category'=>Category::pluck('tagName','tagName')->all()]);

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
