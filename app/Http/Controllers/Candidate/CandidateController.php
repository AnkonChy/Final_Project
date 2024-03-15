<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (Auth::user()->role === 'company') {
            return redirect()->route('company.dashboard');
        }
        return view('candidate.pages.home');
    }
}
