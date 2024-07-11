<?php

namespace App\Http\Controllers;

use App\Models\Fundraiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class FundraiserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $fundraisers = Fundraiser::orderByDesc('id')->get();
        $fundraiserStatus = null;
        if($user->fundraiser()->exists())
        {
            $isFundraiserActive = $user->fundraiser->is_active;
            $fundraiserStatus = $isFundraiserActive ? 'Active' : 'Pending';
        }
        return view('admin.fundraisers.index', compact('fundraiserStatus', 'fundraisers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fundraiser $fundraiser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fundraiser $fundraiser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fundraiser $fundraiser)
    {
        $user = $fundraiser->user;

        DB::transaction(function () use ($fundraiser, $user){
            $fundraiser->update([
                'is_active' => true
            ]);

            if (!$user->hasRole('fundraiser')){
                $user->assignRole('fundraiser');
            }
        });

        return redirect()->route('admin.fundraisers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fundraiser $fundraiser)
    {
        //
    }
}
