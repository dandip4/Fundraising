@extends('FE.layouts.app')
@section('title', 'category')
@section('content')
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden pb-4">
        <div class="header flex flex-col bg-[#56BBC5] rounded-b-[50px] overflow-hidden h-[320px] bg-gradient-to-b from-[#3CBBDB] to-[#EAD380] -mb-[181px]">
            <nav class="pt-5 px-3 flex justify-between items-center">
                <div class="flex items-center gap-[10px]">
                    <a href="{{route('fe.index')}}" class="w-10 h-10 flex shrink-0">
                        <img src="{{asset('assets/images/icons/back.svg')}}" alt="icon">
                    </a>
                </div>
                <p class="font-semibold text-sm text-white">Browse Fundraisings</p>
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="{{asset('assets/images/icons/menu-dot.svg')}}" alt="icon">
                </a>
            </nav>
            <div class="mt-5">
                <h1 class="font-bold text-[26px] leading-[39px] text-white text-center">{{$category->name}}</h1>
            </div>
        </div>
        <div class="flex flex-col gap-4 px-4">
            @forelse ($category->fundraisings as $fundraising)
            <a href="{{route('fe.details', $fundraising)}}" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="{{ Storage::url($fundraising->thumbnail) }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold line-clamp-1 hover:line-clamp-none">{{ $fundraising->name }}</p>
                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp {{ number_format($fundraising->target_amount, 0, ',', '.') }}</span></p>
                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">{{$fundraising->fundraiser->user->name}}</p>
                            <div class="flex shrink-0">
                                <img src="{{asset('assets/images/icons/tick-circle.svg')}}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @empty
            <p>belum ada fundraising tersedia</p>
            @endforelse
        </div>
    </section>
@endsection
