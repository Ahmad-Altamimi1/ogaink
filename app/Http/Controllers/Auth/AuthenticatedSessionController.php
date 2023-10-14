<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Cart;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        // dd(url()->previous());
     
        return view('auth.login');
    }
    public function creates(): View
    {
       
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {  
        $request->authenticate();
        // $request->session()->regenerate();
        if ((session('cart')) == null) {
        } else {
          if (session('cart')) {
                $products = session('cart');
                foreach ($products as $value) {
                    Cart::Create([
                        'productId' => $value['id'],
                        'userId' => Auth::user()->id,
                        'quantity' => $value['quantity'],


                    ]);
                }
          }
        }
        if ($request->has('next')) {
            return redirect($request->input('next'));
        }

  else{
        return redirect()->intended(RouteServiceProvider::HOME);
        }
        // $previousUrl = URL::previous();
    //    return back()->back();



}


    

    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
// $request->session()->regenerate();

        $request->session()->forget('web');

        $request->session()->regenerateToken();
        session()->flush();

        return back();

    }
}
