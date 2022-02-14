<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->photo->extension();  
         
            $request->photo->storeAs('public', $imageName);
        }

        $student = DB::table('students')->insert([
            'name' => $request->fname,
            'photo' => $request->hasFile('photo') ? $imageName : '',
            'serial' => rand(1000000, 100000000),
            'city' => $request->city,
            'year' => $request->year,
            'parent' => $request->parent,
            'group' => $request->group,
            'phone' => $request->phone,
            'password' => '123456',
            'is_locked?' => 0
        ]);
        /* Store $imageName name in DATABASE from HERE */
    
        return back()
            ->with('success','New student has been submitted');
    }

    public function updateNew(Request $request)
    {
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->photo->extension();  
         
            $request->photo->storeAs('public', $imageName);
        }

        $photo = DB::table('students')->where('id', $request->id)->first();
    
        $student = DB::table('students')->where('id', $request->id)->update([
            'name' => $request->fname,
            'photo' => $request->hasFile('photo') ? $imageName : $photo->photo,
            'year' => $request->year,
            'parent' => $request->parent,
            'group' => $request->group,
            'phone' => $request->phone,
        ]);
        /* Store $imageName name in DATABASE from HERE */
    
        return back()
            ->with('success','New student has been submitted');
    }    
}


