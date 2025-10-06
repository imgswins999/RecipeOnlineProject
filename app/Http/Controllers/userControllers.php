<?php

namespace App\Http\Controllers;
use App\Models\Users;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Laravel\Prompts\error;
class userControllers extends Controller
{


     //หน้า login
     public function formLogin()
     {
          return view('user.auth.login');
     }


     //action login
     public function login(Request $request)
     {
          $foods = DB::table('recipe')
               ->join('user', 'recipe.userID', '=', 'user.userID')
               ->join('catagory', 'recipe.catagoryID', '=', 'catagory.catagoryID')
               ->select('recipe.*', 'user.username as username')
               ->get();

          $username = $request->input('username');
          $password = $request->input('password');
          $user = DB::table('user')->where('username', $request->username)->orWhere('email', $request->username)
               ->where('password', $request->password)->first();

          if ($user) {
               $userStatus = true;
               Session::put('user', $user);
               return view('user.page.home', compact('foods', 'userStatus'));
          } else {
               $userStatus = false;
               return back()->with('login', 'ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง');
          }

     }


     // REGISTER
     public function formRegister()
     {
          return view('user.auth.register');
     }


     // หน้าแรก
     public function home()
     {
          $foods = DB::table('recipe')
               ->join('user', 'recipe.userID', '=', 'user.userID')
               ->join('catagory', 'recipe.catagoryID', '=', 'catagory.catagoryID')
               ->select('recipe.*', 'user.username as username')
               ->get();
          $userStatus = false;
          return view('user.page.home', compact('userStatus', 'foods'));
     }

     public function createRecipe()
     {
          $userStatus = true;
          if (!Session::has('user')) {
               return redirect()->route('formRegister');
          }
          $catagory = DB::table('catagory')->get();
          return view('user.page.createRecipes', compact('userStatus', 'catagory'));
     }

     public function showRecipe($recipeID)
     {
          $recipe = DB::table('recipe')
               ->join('user', 'recipe.userID', '=', 'user.userID')
               ->join('catagory', 'recipe.catagoryID', '=', 'catagory.catagoryID')
               ->select('recipe.*', 'user.username as username','user.userImage as userImage')
               ->where('recipe.recipeID', $recipeID)
               ->first();
          return view('user.page.recipeShow', compact('recipe'));
     }
}
