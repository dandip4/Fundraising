<?php

namespace App\Http\Controllers;

use App\Models\Fundraising;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FundraisingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $fundraisingQuery = Fundraising::with([ 'category', 'fundraiser', 'donaturs'])->orderByDesc('id');

        if($user->hasRole('fundraiser'))
        {
            $fundraisingQuery->whereHas('fundraiser', function ($query) use ($user){
                $query->where('user_id', $user->id);
            });
        }

        $fundraisings = $fundraisingQuery->paginate(10);

        return view('admin.fundraisings.index', compact('fundraisings'));
    }

    public function activate_fundrasising()
    {

    }
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
    public function show(Fundraising $fundraising)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fundraising $fundraising)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fundraising $fundraising)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fundraising $fundraising)
    {
        //
    }
}
