@extends('FE.layouts.app')
@section('title', 'details-finished')
@section('content')

    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col bg-[#56BBC5] overflow-hidden h-[350px] relative -mb-[92px]">
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="flex items-center gap-[10px]">
                    <a href="index.html" class="w-10 h-10 flex shrink-0">
                        <img src="{{asset('assets/images/icons/back.svg')}}" alt="icon">
                    </a>
                </div>
                <div class="flex flex-col items-center text-center">
                    <p class="text-xs leading-[18px] text-white">Details</p>
                    <p class="font-semibold text-sm text-white">#WeNeedHelp</p>
                </div>
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="{{asset('assets/images/icons/like.svg')}}" alt="icon">
                </a>
            </nav>
            <div class="w-full h-full absolute bg-white overflow-hidden">
                <div class="w-full h-[266px] bg-gradient-to-b from-black/90 to-[#080925]/0 absolute z-10"></div>
                <img src="{{asset('assets/images/thumbnails/th4.png')}}')}}" class="w-full h-full object-cover" alt="cover">
            </div>
        </div>
        <div class="flex flex-col z-30">
            <div id="status" class="w-full h-[92px] bg-[#76AE43] rounded-t-[40px] pt-3 pb-[50px] flex gap-2 justify-center items-center -mb-[38px]">
                <div class="w-[30px] h-[30px] flex shrink-0">
                    <img src="{{asset('assets/images/icons/lovely.svg')}}" alt="icon">
                </div>
                <p class="font-semibold text-sm text-white">This Fundraising has been finished</p>
            </div>
            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">
                <div class="flex flex-col gap-[10px]">
                    <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">FINISHED</p>
                    <h1 class="font-extrabold text-[26px] leading-[39px]">Perbaikan Kebakaran Alam Hutani Perlidanita</h1>
                    <div class="flex items-center gap-2">
                        <div class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden">
                            <img src="{{asset('assets/images/photos/photo.png')}}" class="w-full h-full object-cover" alt="photo">
                        </div>
                        <div class="flex gap-1 items-center">
                            <p class="font-semibold text-sm">Angga Risky</p>
                            <div class="flex shrink-0">
                                <img src="{{asset('assets/images/icons/tick-circle.svg')}}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="font-semibold text-sm">Progress</h2>
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-[#66697A]">Rp 7.500.000</p>
                        <p class="font-bold text-[20px] leading-[30px] text-[#76AE43]">Rp 12.000.000</p>
                    </div>
                    <progress id="fund" value="66" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                </div>
                <div class="flex flex-col gap-[10px] p-5 rounded-[20px] bg-[#F6ECE2]">
                    <h2 class="font-semibold text-sm">Mereka Senang dan Bahagia</h2>
                    <div class="aspect-[61/30] rounded-2xl bg-[#D9D9D9] overflow-hidden">
                        <img src="{{asset('assets/images/thumbnails/support-finished.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <p class="text-sm leading-[26px]">Kami bersyukur bahwa seluruh dana sudah terkumpul dan sudah diberikan kpd setiap penerima untuk membeli bahan pokok.</p>
                </div>
                <div class="flex flex-col gap-[2px]">
                    <h2 class="font-semibold text-sm">About</h2>
                    <p class="desc-less text-sm leading-[26px]">Kebakaran Hutan dan Lahan (Karhutla) yang terjadi di sejumlah titik di wilayah Kalimantan Barat (Kalbar) selama beberapa <button class="text-[#FF7815] underline" onclick="toggleSeeMoreLess()">see more</button></p>
                    <p class="desc-more text-sm leading-[26px] hidden">Kebakaran Hutan dan Lahan (Karhutla) yang terjadi di sejumlah titik di wilayah Kalimantan Barat (Kalbar) selama beberapa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis a earum iure nihil voluptas tenetur. <button class="text-[#FF7815] underline" onclick="toggleSeeMoreLess()">see less</button></p>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center justify-between">
                        <h2 class="font-semibold text-sm">Supporters (18,309)</h2>
                        <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">View All</a>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{asset('assets/images/photos/avatar-default.svg')}}" class="w-full h-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col gap-[2px] w-full">
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">Rp 200.000</p>
                                    <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by Annemi</p>
                                </div>
                                <p class="caption text-xs leading-[18px] text-[#66697A]">“Ayo semangat pasti kamu bisa!”</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{asset('assets/images/photos/avatar-default.svg')}}" class="w-full h-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col gap-[2px] w-full">
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">Rp 12.500.000</p>
                                    <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by Saranova</p>
                                </div>
                                <p class="caption text-xs leading-[18px] text-[#66697A]">“Jangan lupa berdoa agar lancar”</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{asset('assets/images/photos/avatar-default.svg')}}" class="w-full h-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col gap-[2px] w-full">
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">Rp 15.000.000</p>
                                    <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by Angga</p>
                                </div>
                                <p class="caption text-xs leading-[18px] text-[#66697A]">“Terus dicoba saya yakin bisa”</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{asset('assets/images/photos/avatar-default.svg')}}" class="w-full h-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col gap-[2px] w-full">
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">Rp 80.000</p>
                                    <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by Dermatopi</p>
                                </div>
                                <p class="caption text-xs leading-[18px] text-[#66697A]">“Ayo semangat pasti kamu bisa!”</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{asset('assets/images/photos/avatar-default.svg')}}" class="w-full h-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col gap-[2px] w-full">
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">Rp 560.000.000</p>
                                    <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by Shayna</p>
                                </div>
                                <p class="caption text-xs leading-[18px] text-[#66697A]">“Jangan lupa berdoa agar lancar”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

