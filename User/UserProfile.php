<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Sentinel;
use Validator;
use Image;

class UserProfile extends Controller
{
    public function profile(){
        if(Sentinel::check()){
            $user = Sentinel::getUser();
            return view('user.profile', compact('user'));
        }else{
            echo 'Please login first';
        }
    }

    public function profileImage(Request $request){
        if(Sentinel::check()){

            $postData = $request->only('image');
            $file = $postData['image'];

            // Validate our image file
            $fileArray = array('image' => $file);
            $rules = array(
                'image' => 'image|required|max:2000'
            );
            $validator = Validator::make($fileArray, $rules);

            if($validator->fails()){
                return redirect()->back()
                    ->with(['errors'=>$validator->errors()->all()]);
            }else{
                $imagePath120 = public_path('/image/user/120/');
                $imagePath150 = public_path('/image/user/150/');
                $imagePath500 = public_path('/image/user/500/');

                $fileExtension = '.jpg';

                Image::configure(array('driver'=>'gd'));
                $imageName = sha1(time()) . $fileExtension;

                // 120 x 120
                $savePath = $imagePath120 . $imageName;
                $img = Image::make($request->image)
                    ->resize(120, 120)
                    ->save($savePath);
                $img->save();


                // 150 x 150
                $savePath = $imagePath150 . $imageName;
                $img = Image::make($request->image)
                    ->resize(150, 150)
                    ->save($savePath);
                $img->save();


                // 500 x 500
                $savePath = $imagePath500 . $imageName;
                $img = Image::make($request->image)
                    ->resize(500, 500)
                    ->save($savePath);
                $img->save();

                $user = Sentinel::getUser();
                $user->image = $imageName;
                $user->save();

                return redirect()->back()
                    ->with(['success'=>'Image uploaded successfully']);                
            }            
        }else{
            echo 'Please login first';
        }
    }
}
