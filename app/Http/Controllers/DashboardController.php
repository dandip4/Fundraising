<?php

namespace App\Http\Controllers;

use App\Models\Fundraiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function apply_fundraiser()
    {
        $user = Auth::user();

        DB::transaction(function () use ($user){
            $validated['user_id'] = $user->id;
            $validated['is_active'] = false;

            Fundraiser::create($validated);
        });

        return redirect()->route('admin.fundraisers.index');
    }
}
