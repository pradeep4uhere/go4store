<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Master;
use App\Http\Controllers\Auth\Session;
use Illuminate\Http\Request;
use Auth;
use Darryldecode\Cart\CartCondition;
use App\Http\Controllers\Auth\Cookie;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\EmailController;
//use App\Http\Controllers\Auth\Session;
use Log;
use App\User;
class LoginController extends Master
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    /**
     *@Author: Pradeep Kumar
     *@Description: Show Login Page
     */
    public function showLoginForm() {
        $pincode = $this->getPinCode();
        return view(Master::loadFrontTheme('firezyshop.Login.index'),array('pincode'=>$pincode));
    }

    public function fblogin(Request $request) {
         $data = $request->all();
         Log::channel('fblogin')->info('Request', array('data'=>json_encode($data)));
    }
    
    
    /**
     *@Author: Pradeep Kumar
     *@Description: Login Authentication Page
     */
    public function login(Request $request) {
        $pincode = $this->getPinCode();
        //dd($request);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $userId = Auth::user()->id;
            $email =  Auth::user()->email;
            $first_name =  Auth::user()->first_name;
            \Cookie::make('email', $email, 3600);
            \Cookie::make('name', $email, 360);
            \Cookie::make('password', $request->get('password'), 360);
            \Cookie::make('first_name', $first_name, 360);
            $cartCollection = \Cart::session(Auth::user()->id);
            // then you can:
            $cartCollection = \Cart::getContent();
            session(['countItem' => $cartCollection->count()]);
            $lang = \Session::get('lang_code');
		    return redirect()->route('homePage');
        }else{
            \Session::flash('message', 'Opps, Invalid credentials !'); 
            \Session::flash('alert-class', 'alert-danger'); 
        }
        return view(Master::loadFrontTheme('firezyshop.Login.index'),array('pincode'=>$pincode));
    }



    public function ResetEmail($user) {
        EmailController::ResetEmail($user);
    }


    private function checkEmail($email) {
        return true;
        $find1 = strpos($email, '@');
        $find2 = strpos($email, '.');
        return ($find1 !== false && $find2 !== false && $find2 > $find1);
    }



    public function resetPassword(Request $request){
            $responseArray = array();
            try{
                $validator = Validator::make($request->all(), [
                    'email' => 'required',
                ]);
                if ($validator->fails()) {
                    $errors = $validator->errors();
                    $responseArray['status'] = 'success';
                    $responseArray['message']= "Input are not valid";
                    $responseArray['error']= $errors;
                }else{
                        $email = $request->get('email');
                        if ($this->checkEmail($email) ) {
                            $user = User::where('email','=',$email)->first();
                            if(!empty($user)){
                                \Session::flash('message', 'Pelase check your mailbox, link has been sent to your registred email.!'); 
                                 \Session::flash('alert-class', 'alert-success'); 
                                $this->ResetEmail($user);
                                $responseArray['status'] = 'success';
                                $responseArray['message'] = "Pelase check your mailbox, link has been sent to your registred email.";
                                return redirect('forgotpassword')->with('success', 'Pelase check your mailbox, link has been sent to your registred email.');   ;
                                 
                            }else{
                                $responseArray['status'] = 'error';
                                $responseArray['message'] = "This email address not register with us."; 
                                \Session::flash('message', 'This email address not register with us.!'); 
                                \Session::flash('alert-class', 'alert-danger'); 
                            }
                        }else{
                            $responseArray['status'] = 'error';
                            $responseArray['message'] = "This email address not valid.";
                            \Session::flash('message', 'This email address not valid.!'); 
                            \Session::flash('alert-class', 'alert-danger'); 
                        }
                }

            }catch (Exception $e) {
                $responseArray['status'] = 'error';
                $responseArray['message'] = $e->getMessage();
                \Session::flash('message', $e->getMessage()); 
                \Session::flash('alert-class', 'alert-danger'); 
            }
            return redirect('forgotpassword');
            //return view(Master::loadFrontTheme('firezyshop.Login.ForgotPassword'));
            }
        



        public function forgotpasswordform(Request $request){
            $pincode = $this->getPinCode();
            return view(Master::loadFrontTheme('firezyshop.Login.ForgotPassword'),array('pincode'=>$pincode));
        }



        public function resetpassform(Request $request,$token){
            $pincode = $this->getPinCode();
            return view(Master::loadFrontTheme('firezyshop.Login.ResetPasswordForm'),array('token'=>$token,'pincode'=>$pincode));
        }



        public function ChangePassword(Request $request){
            //echo $request->get('token');die;
           echo $email = decrypt($request->get('token')); die;
            $validator = Validator::make($request->all(), [
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required|min:6'
            ]);
            if($validator->fails()) {
                    $error=$validator->errors()->all();
                    \Session::flash('error', $error);
                    foreach($request->all() as $k=>$value){
                        \Session::flash($k, $request->get($k));
                    }
                    return redirect('/resetpass/'.$request->get('token'))
                     ->withErrors($validator)
                     ->withInput();
            }else{
            try{
               $email = decrypt($request->get('token')); 
            }catch (DecryptException $e) {
                $responseArray['status'] = false;
                $responseArray['code'] = 500;
                $responseArray['message'] = $e->getMessage().' Please try after sometime';
                $responseArray['error']['password']= '';
                return response()->json($responseArray);
            }
            $user = User::where('email','=',$email)->first();
            if(!empty($user)){
                $userObj = User::find($user->id);
                $userObj->password = Hash::make($request->get('password'));
                if($userObj->save()){
                    $responseArray['code'] = 200;
                    $responseArray['status'] = 'success';
                    $responseArray['message'] = "Password has been change successfully, please login again.";
                }else{
                    $responseArray['code'] = 500;
                    $responseArray['status'] = 'error';
                    $responseArray['message'] = "Somthing went wrong, Please try after sometime";
                }
            }else{
                $responseArray['code'] = 403;
                $responseArray['status'] = 'error';
                $responseArray['message'] = "Invalid URL or request, please try after sometime";
            }

        }
        return redirect('resetpass');
        return response()->json($responseArray);
     }





}