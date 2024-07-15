@extends('FE.layouts.app')
@section('title', 'details')
@section('content')
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col bg-[#56BBC5] overflow-hidden h-[350px] relative -mb-[92px]">
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="flex items-center gap-[10px]">
                    <a href="{{route('fe.index')}}" class="w-10 h-10 flex shrink-0">
                        <img src="{{ asset('assets/images/icons/back.svg') }}" alt="icon">
                    </a>
                </div>
                <div class="flex flex-col items-center text-center">
                    <p class="text-xs leading-[18px] text-white">Details</p>
                    <p class="font-semibold text-sm text-white">#WeNeedHelp</p>
                </div>
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="{{ asset('assets/images/icons/like.svg') }}" alt="icon">
                </a>
            </nav>
            <div class="w-full h-full absolute bg-white overflow-hidden">
                <div class="w-full h-[266px] bg-gradient-to-b from-black/90 to-[#080925]/0 absolute z-10"></div>
                <img src="{{ Storage::url($fundraising->thumbnail) }}" class="w-full h-full object-cover" alt="cover">
            </div>
        </div>
        <div class="flex flex-col z-30">
            @if ($fundraising->has_finished)

            <div id="status" class="w-full h-[92px] bg-[#76AE43] rounded-t-[40px] pt-3 pb-[50px] flex gap-2 justify-center items-center -mb-[38px]">
                <div class="w-[30px] h-[30px] flex shrink-0">
                    <img src="{{asset('assets/images/icons/lovely.svg')}}" alt="icon">
                </div>
                <p class="font-semibold text-sm text-white">This Fundraising has been finished</p>
            </div>
            @else

            <div id="status"
                class="w-full h-[92px] bg-[#FF7815] rounded-t-[40px] pt-3 pb-[50px] flex gap-2 justify-center items-center -mb-[38px]">
                <div class="w-[30px] h-[30px] flex shrink-0">
                    <img src="{{ asset('assets/images/icons/lovely.svg') }}" alt="icon">
                </div>
                <p class="font-semibold text-sm text-white">Everyone deserves your best help</p>
            </div>
            @endif

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_120px]">
                <div class="flex flex-col gap-[10px]">
                    @if ($fundraising->has_finished)
                        <p
                            class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">
                            FINISHED</p>
                    @else
                        <p
                            class="badge bg-[#40BCD9] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">
                            IN PROGRESS</p>
                    @endif
                    <h1 class="font-extrabold text-[26px] leading-[39px]">{{ $fundraising->name }}</h1>
                    <div class="flex items-center gap-2">
                        <div class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden">
                            <img src="{{ Storage::url($fundraising->fundraiser->user->avatar) }}"
                                class="w-full h-full object-cover" alt="photo">
                        </div>
                        <div class="flex gap-1 items-center">
                            <p class="font-semibold text-sm">{{ $fundraising->fundraiser->user->name }}</p>
                            <div class="flex shrink-0">
                                <img src="{{ asset('assets/images/icons/tick-circle.svg') }}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="font-semibold text-sm">Progress</h2>
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-[#66697A]">Rp
                            {{ number_format($fundraising->totalReachedAmount(), 0, ',', '.') }}</p>
                        <p class="font-bold text-[20px] leading-[30px] text-[#76AE43]">Rp
                            {{ number_format($fundraising->target_amount, 0, ',', '.') }}</p>
                    </div>
                    <progress id="fund" value="{{ $fundraising->getPercentageAttribute() }}" max="100"
                        class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                </div>
                <div class="flex flex-col gap-[2px]">
                    <h2 class="font-semibold text-sm">About</h2>
                    <p class="desc-less text-sm leading-[26px]">{{ $fundraising->about }}</p>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center justify-between">
                        <h2 class="font-semibold text-sm">Supporters {{$fundraising->donaturs->count()}}</h2>
                        <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">View All</a>
                    </div>
                    <div class="flex flex-col gap-4">

                        @forelse($fundraising->donaturs as $donatur)
                            <div class="flex items-center gap-3">
                                <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                    <img src="{{ asset('assets/images/photos/avatar-default.svg') }}"
                                        class="w-full h-full object-cover" alt="avatar">
                                </div>
                                <div class="flex flex-col gap-[2px] w-full">
                                    <div class="flex items-center justify-between">
                                        <p class="font-bold">Rp {{ number_format($donatur->total_amount, 0, ',', '.') }}
                                        </p>
                                        <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by
                                            {{ $donatur->name }}
                                        </p>
                                    </div>
                                    <p class="caption text-xs leading-[18px] text-[#66697A]">{{ $donatur->notes }}</p>
                                </div>
                            </div>
                        @empty
                            <p>
                                belum ada yang memberikan donasi
                            </p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        @if (!$goalReached)
        <a href="{{route('fe.support', $fundraising->slug)}}"
        class="p-[14px_20px] bg-[#76AE43] rounded-full text-white w-fit mx-auto font-semibold hover:shadow-[0_12px_20px_0_#76AE4380] transition-all duration-300 fixed bottom-[30px] transform -translate-x-1/2 left-1/2 z-40 text-nowrap">Send
        My Support Now</a>
        @endif
    </section>
@endsection
