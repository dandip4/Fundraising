<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFundraisingRequest;
use App\Http\Requests\UpdateFundraisingRequest;
use App\Models\Category;
use App\Models\Fundraiser;
use App\Models\Fundraising;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

    public function active_fundraising(Fundraising $fundraising)
    {
        DB::transaction(function () use ($fundraising){
            $fundraising->update([
                'is_active' => true
            ]);
        });

        return redirect()->route('admin.fundraisings.show', $fundraising);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.fundraisings.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFundraisingRequest $request)
    {

        $fundraiser = Fundraiser::where('user_id', Auth::user()->id)->first();

        DB::transaction(function() use ($request, $fundraiser){
            $validated = $request->validated();

            if($request->hasFile('thumbnail')){
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            } else {
                $thumbnailPath = 'images/thumbnail-category-default.png';
            }

            $validated['slug'] = Str::slug($validated['name']);

            $validated['fundraiser_id'] = $fundraiser->id;
            $validated['is_active'] = false;
            $validated['has_finished'] = false;

            $fundraising = Fundraising::create($validated);
        });

        return redirect()->route('admin.fundraisings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fundraising $fundraising)
    {
        $totalDonations = $fundraising->totalReachedAmount();
        $goalReached = $totalDonations >= $fundraising->target_amount;

        $hasRequestedWithdrawal = $fundraising->withdrawals()->exists();

        $percentage = ($totalDonations / $fundraising->target_amount) * 100;
        if($percentage > 100)
        {
            $percentage = 100;
        }
        return view('admin.fundraisings.show', compact('hasRequestedWithdrawal','fundraising', 'goalReached', 'percentage', 'totalDonations'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fundraising $fundraising)
    {
        $categories = Category::all();
        return view('admin.fundraisings.edit', compact('fundraising', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFundraisingRequest $request, Fundraising $fundraising)
    {
        DB::transaction(function () use ($request, $fundraising) {
            $validated = $request->validated();
            if($request->hasFile('thumbnail')){
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $fundraising->update($validated);
        });

        return redirect()->route('admin.fundraisings.show', $fundraising);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fundraising $fundraising)
    {
        DB::beginTransaction();

        try{
            $fundraising->delete();
            DB::commit();
            return redirect()->route('admin.fundraisings.index');
        }
        catch (\Exception $e){
            DB::rollBack();
            return redirect()->route('admin.fundraisings.index');
        }
    }
}
