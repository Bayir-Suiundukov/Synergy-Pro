<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    #редактирование
    public function getEdit()
        {
          return view('auth.edit');
        }

    public function postEdit(Request $request)
        {
          $request->validate([
            'name' => ['alpha','required', 'string', 'max:50'],
            'surname' => ['alpha','required', 'string', 'max:50'],
            'number' => ['required', ' numeric'],
            'aboutme' => ['max:250'],
            'email' => ['required', 'string', 'email', 'max:255'],
          ]);

          Auth::user()->update([
              'name' => $request->input('name'),
              'surname' => $request->input('surname'),
              'number' => $request->input('number'),
              'aboutme' => $request->input('aboutme'),
              'email' => $request->input('email'),
          ]);
          return redirect()
                            ->route('dashboard');
        }
}
