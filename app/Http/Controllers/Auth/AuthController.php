<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\User;
use App\Models\Mitra;
use App\Models\Employee;
use App\Models\Car;
use Hash;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        $checklogin = Auth()->attempt($credentials);
        $level = DB::table('users')->where('email', $request->email)->value('level');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'level' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        $level = DB::table('users')->where('email', Auth::user()->email)->value('level');
        if(Auth::check()){
            if($level == "admin"){
                return view('home.dashboardadmin');
            }elseif($level == "cs"){
                return view('home.dashboardcs');
            }elseif($level == "manager"){
                return view('home.dashboardmanager');
            }elseif($level == "customer"){
                $cars = Car::OrderBy('id', 'ASC')->get();
                $users = DB::table('users')->where('email', Auth::user()->email)->value('id');
                return view('home.dashboardcustomer', compact('cars', 'users'));
            }elseif($level == "driver"){
                return view('home.dashboarddriver');
            }else{
            return view('home.dashboard');
        }
    }
        return redirect("login")->withSuccess('Opps! You do not have access');
}

    

    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'level' => $data['level'],
      ]);
    }
    
    public function createcustomer(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'level' => $data['level'],
      ]);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
