<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CandidateController extends Controller {
    // store user->candidate to database
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);

        $formFields['type'] = 'candidate';

        // create user
        $user = User::create($formFields);

        // login user after register
        auth()->login($user);
        return redirect('/candidate/dashboard')->with('message', 'Candidate created and logged in');
    }

    public function viewDashboard(){
        return view('pages.candidate.dashboard');
    }
}
