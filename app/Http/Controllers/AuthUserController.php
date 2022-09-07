<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\Customer;
use Session;

class AuthUserController extends Controller
{
    public function Loginindex()
    {
        $customer = Customer::all();
        return view('/users/pages/loginCustomer', compact('customer'));
    }

    public function Customerindex()
    {
        $customer = Customer::all();
        return view('/admin/admin-customer/index', compact('customer'));
    }

    public function Regisindex()
    {
        $customer = Customer::all();
        return view('/users/pages/regisCustomer', compact('customer'));
    }

    function doLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',   // required and email format validation
            'password' => 'required', // required and number field validation

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return back()->withInput()->withErrors($validator);
            // validation failed redirect back to form
        } else {
            //validations are passed try login using laravel auth attemp
            if (Auth::guard('customer')->attempt($request->only(["email", "password"]))) {
                return redirect("/")->with('success', 'Login Successful');
            } else {
                return back()->withErrors("Invalid credentials"); // auth fail redirect with error
            }
        }
    }

    function doRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',   // required and email format validation
            'password' => 'required|min:8', // required and number field validation

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {

            return back()->withInput()->withErrors($validator);
            // validation failed redirect back to form

        } else {
            //validations are passed, save new user in database
            $Customer = new Customer;
            $Customer->name = $request->name;
            $Customer->email = $request->email;
            $Customer->password = bcrypt($request->password);
            $Customer->status = 1;
            $Customer->save();

            return redirect("/")->with('success', 'You have successfully registered, Login to access your dashboard');
        }
    }

    // logout method to clear the sesson of logged in user
    function Cuslogout()
    {
        Auth::guard('customer')->logout();
        return redirect("/")->with('success', 'Logout successfully');;
    }
}
