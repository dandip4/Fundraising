<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Category;
use App\Models\Donatur;
use App\Models\Fundraiser;
use App\Models\Fundraising;
use App\Models\FundraisingWithdrawal;
=======
use App\Models\Fundraiser;
>>>>>>> 6246727 (fundraiser and fundraising)
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
<<<<<<< HEAD

    public function my_withdrawals()
    {
        $user = Auth::user();

        $fundraiserId = $user->fundraiser->id;
        $withdrawals = FundraisingWithdrawal::where('fundraiser_id', $fundraiserId)->orderByDesc('id')->get();

        return view('admin.my_withdrawals.index', compact('withdrawals'));
    }

    public function my_withdrawals_detail(FundraisingWithdrawal $fundraisingWithdrawal)
    {
        return view('admin.my_withdrawals.details', compact('fundraisingWithdrawal'));
    }

    public function index()
    {
        $user = Auth::user();

        $fundraisingsQuery = Fundraising::query();
        $withdrawalsQuery = FundraisingWithdrawal::query();

        if($user->hasRole('fundraiser'))
            {
                $fundraiserId = $user->fundraiser->id;

                $fundraisingsQuery->where('fundraiser_id', $fundraiserId);
                $withdrawalsQuery->where('fundraiser_id', $fundraiserId);

                $fundrasingsIds = $fundraisingsQuery->pluck('id');

                $donaturs = Donatur::whereIn('fundraising_id', $fundrasingsIds)
                ->where('is_paid', true)
                ->count();
            }else {
                $donaturs = Donatur::where('is_paid', true)->count();
            }

            $fundraisings = $fundraisingsQuery->count();
            $withdrawals = $withdrawalsQuery->count();
            $categories = Category::count();
            $fundraisers= Fundraiser::count();

            return view('dashboard', compact('donaturs', 'fundraisings', 'categories', 'withdrawals', 'fundraisers'));
    }
=======
>>>>>>> 6246727 (fundraiser and fundraising)
}
