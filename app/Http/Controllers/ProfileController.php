<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\User;
use App\Models\User_site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        if($id == Auth::user()->id){
            return redirect('/my-profile');
        }

        $user = User::find($id);
        $cases = Cases::where('user_id',$id)->get();
        return view('profile' ,compact('user','cases'));
    }



    public function getMyProfile()
    {
        if(Auth::user()){
            return view('my_profile');
        }else{
            return view('home');
        }

    }



    public function makeUserAdmin($id)
    {
        $user = User::find($id);

        $user->permission = 1;
        $user->save();
        return response()->json([
            'status'       => 'success'
            ]);

    }



    public function postUpdateProfile(Request $request)
    {

        $url = URL::to("/");

        if($request["image"]){
            $validation = Validator::make($request->all(),[
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:6144'
            ]);

            if($validation->passes()){
                $image = $request->file('image');
                $new_name = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('/images/uploads'),$new_name);

                $user = User::find(Auth::user()->id);

                $user ->image = '/images/uploads/'.$new_name;
                $user->save();

                return response()->json([
                    'section'       => 'image',
                    'status'        => 'pass',
                    'message'       => 'Image updated successfully',
                    'updated_section'  => '<img src="'.$url.'/images/uploads/'.$new_name.'" class="img-thumbnail" alt="">',
                    'class_name'    => 'success',
                    'style_color'   => 'green'
                ]);
            }else{
                return response()->json([
                    'section'       => 'image',
                    'status'        => 'fail',
                    'message'       => $validation->errors()->all(),
                    'updated_section'  => '',
                    'class_name'    => 'danger',
                    'style_color'   => 'red'
                ]);
            }
        }


        if($request["name"]){
            $validation = Validator::make($request->all(),[
                'name' => 'required|min:3'
            ]);

            if($validation->passes()){

                $user = User::find(Auth::user()->id);
                $user ->name = $request->name;
                $user->save();

                return response()->json([
                    'section'           => 'name',
                    'status'            => 'pass',
                    'message'           => 'Name updated successfully',
                    'updated_section'   => $request->name,
                    'class_name'        => 'success',
                    'style_color'       => 'green'
                ]);
            }else{
                return response()->json([
                    'section'           => 'name',
                    'status'            => 'fail',
                    'message'           => $validation->errors()->all(),
                    'updated_section'   => '',
                    'class_name'        => 'danger',
                    'style_color'       => 'red'
                ]);
            }
        }

        if($request["title"]){
            $validation = Validator::make($request->all(),[
                'title' => 'required|min:3'
            ]);

            if($validation->passes()){

                $user = User::find(Auth::user()->id);
                $user ->title = $request->title;
                $user->save();

                return response()->json([
                    'section'           => 'title',
                    'status'            => 'pass',
                    'message'           => 'Title updated successfully',
                    'updated_section'   => $request->title,
                    'class_name'        => 'success',
                    'style_color'       => 'green'
                ]);
            }else{
                return response()->json([
                    'section'           => 'title',
                    'status'            => 'fail',
                    'message'           => $validation->errors()->all(),
                    'updated_section'   => '',
                    'class_name'        => 'danger',
                    'style_color'       => 'red'
                ]);
            }
        }

        if($request["address"]){
            $validation = Validator::make($request->all(),[
                'address' => 'required|min:10'
            ]);

            if($validation->passes()){

                $user = User::find(Auth::user()->id);
                $user ->address = $request->address;
                $user->save();

                return response()->json([
                    'section'           => 'address',
                    'status'            => 'pass',
                    'message'           => 'Address updated successfully',
                    'updated_section'   => $request->address,
                    'class_name'        => 'success',
                    'style_color'       => 'green'
                ]);
            }else{
                return response()->json([
                    'section'           => 'address',
                    'status'            => 'fail',
                    'message'           => $validation->errors()->all(),
                    'updated_section'   => '',
                    'class_name'        => 'danger',
                    'style_color'       => 'red'
                ]);
            }
        }

        if($request["phone"]){
            $validation = Validator::make($request->all(),[
                'phone' => 'required|min:9'
            ]);

            if($validation->passes()){

                $user = User::find(Auth::user()->id);
                $user ->phone = $request->phone;
                $user->save();

                return response()->json([
                    'section'           => 'phone',
                    'status'            => 'pass',
                    'message'           => 'Phone updated successfully',
                    'updated_section'   => $request->phone,
                    'class_name'        => 'success',
                    'style_color'       => 'green'
                ]);
            }else{
                return response()->json([
                    'section'           => 'phone',
                    'status'            => 'fail',
                    'message'           => $validation->errors()->all(),
                    'updated_section'   => '',
                    'class_name'        => 'danger',
                    'style_color'       => 'red'
                ]);
            }
        }

//        if($request["email"]){
//            $validation = Validator::make($request->all(),[
//                'email' => 'required','exists:user,email'
//            ]);
//
//            if($validation->passes()){
//
//                $user = User::find(Auth::user()->id);
//                $user ->email = $request->email;
//                $user->save();
//
//                return response()->json([
//                    'section'           => 'email',
//                    'status'            => 'pass',
//                    'message'           => 'Email updated successfully',
//                    'updated_section'   => $request->phone,
//                    'class_name'        => 'success',
//                    'style_color'       => 'green'
//                ]);
//            }else{
//                return response()->json([
//                    'section'           => 'email',
//                    'status'            => 'fail',
//                    'message'           => $validation->errors()->all(),
//                    'updated_section'   => '',
//                    'class_name'        => 'danger',
//                    'style_color'       => 'red'
//                ]);
//            }
//        }



        if($request["password"]){
            $validation = Validator::make($request->all(),[
                'password' => 'min:8',
                'confirm-password' => 'required_with:password|same:password|min:8'
            ]);

            if($validation->passes()){

                $user = User::find(Auth::user()->id);
                $user ->password = Hash::make($request->password);
                $user->save();

                return response()->json([
                    'section'           => 'password',
                    'status'            => 'pass',
                    'message'           => 'Password updated successfully',
                    'updated_section'   => $request->password,
                    'class_name'        => 'success',
                    'style_color'       => 'green'
                ]);
            }else{
                return response()->json([
                    'section'           => 'password',
                    'status'            => 'fail',
                    'message'           => $validation->errors()->all(),
                    'updated_section'   => '',
                    'class_name'        => 'danger',
                    'style_color'       => 'red'
                ]);
            }
        }



    }





    public function getWelcome()
    {

        return view('welcome');


    }
}
