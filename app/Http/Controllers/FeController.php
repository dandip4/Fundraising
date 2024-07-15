<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Fundraising;
use Illuminate\Http\Request;

class FeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $fundraisings = Fundraising::with(['category', 'fundraiser'])
        ->where('is_active', 1)
        ->orderByDesc('id')
        ->get();


        return view('FE.views.index', compact('categories', 'fundraisings'));
    }

    public function category(Category $category)
    {
        return view('FE.views.category', compact('category'));
    }

    public function details(Fundraising $fundraising)
    {
        $goalReached = $fundraising->totalReachedAmount() >= $fundraising->target_amount;
        return view('FE.views.details', compact('fundraising', 'goalReached'));
    }

    public function support(Fundraising $fundraising)
    {
        return view('FE.views.send-support', compact('fundraising'));
    }

    public function checkout(Fundraising $fundraising, $totalAmountDonation)
    {
        return view('FE.views.checkout', compact('fundraising','totalAmountDonation'));
    }

    public function store()
    {

    }
}
