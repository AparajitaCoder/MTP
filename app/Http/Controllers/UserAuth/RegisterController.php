<?php

namespace App\Http\Controllers\UserAuth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home/thanks';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user.guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'mobile' => 'required|max:15',
            'user_type' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_type' => $data['user_type'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);  
       
       /* $from = "From: no-reply@mtp.com";
        $to = $user['email'];
        $subject = "Registration Successful";
        $message = '<span style="font-size: 11pt; font-family: Calibri, arial;">';
        $message .= "Dear ".$user['first_name']." ".$user['last_name'].",";
        $message .= "<br><br>Thak you for your registration. ";
        $message .= "<br>The innovation Team are processing your request, and you will soon be told that your account has Been activated. ";
        $message .= "<br>Please check your email.";
        $message .= "<br><br>Thank you";
        $message .= "<br>MTP Team";
        $message .= "</span>";
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";     
        $headers .= 'From: <'.$from.'>' . "\r\n"; 
        
        mail($to, $subject, $message, $from); */   
        if (request()->getHttpHost() != "localhost") {
            Mail::to($user['email'])->send(new RegisterMail($user));
        }
        return $user;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('user.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('user');
    }
    
    public function register(Request $request)
    {       
        $this->validator($request->all())->validate();        
        event(new Registered($user = $this->create($request->all())));           
        return $this->registered($request, $user)
        ?: redirect($this->redirectPath());
    }
}
