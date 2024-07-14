@extends('FE.layouts.app')
@section('content')
<section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
    <div class="header flex flex-col bg-gradient-to-b from-[#3CBBDB] to-[#EAD380] rounded-b-[50px] overflow-hidden">
        <nav class="pt-5 px-3 flex justify-between items-center">
            <div class="flex items-center gap-[10px]">
                <div class="w-10 h-10 flex shrink-0">
                    <img src="{{asset('assets/images/icons/loc.svg')}}" alt="icon">
                </div>
                <div class="flex flex-col text-white">
                    <p class="text-xs leading-[18px]">Location</p>
                    <p class="font-semibold text-sm">Bali, Indonesia</p>
                </div>
            </div>
            <a href="" class="w-10 h-10 flex shrink-0">
                <img src="{{asset('assets/images/icons/menu.svg')}}" alt="icon">
            </a>
        </nav>
        <div class="mt-[30px] z-10">
            <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center">Help Other People.<br>Life Becomes Happier.</h1>
        </div>
        <div class="w-full h-fit overflow-hidden -mt-[33px]">
            <img src="{{asset('assets/images/backgrounds/hero-background.png')}}" class="w-full h-full object-contain" alt="background">
        </div>
    </div>
    <div id="popular-fundrising" class="mt-8">
        <div class="px-4 flex justify-between items-center">
            <h2 class="font-bold text-lg">Popular <br>Fundraisings</h2>
            <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">Explore All</a>
        </div>
        <div class="main-carousel mt-[14px]">
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                    <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/images/icons/icon natural disasters.png')}}" alt="icon">
                    </div>
                    <span class="font-semibold text-center my-auto">Natural Disasters</span>
                </a>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                    <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/images/icons/icon animals rescue.png')}}" alt="icon">
                    </div>
                    <span class="font-semibold text-center my-auto">Animals Rescue</span>
                </a>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                    <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/images/icons/icon medical treatment.png')}}" alt="icon">
                    </div>
                    <span class="font-semibold text-center my-auto">Medical Treatment</span>
                </a>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                    <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/images/icons/icon small business.png')}}" alt="icon">
                    </div>
                    <span class="font-semibold text-center my-auto">Small Business</span>

                </a>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                    <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/images/icons/icon natural disasters.png')}}" alt="icon">
                    </div>
                    <span class="font-semibold text-center my-auto">Protecting Nature</span>
                </a>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                    <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/images/icons/icon medical treatment-1.png')}}" alt="icon">
                    </div>
                    <span class="font-semibold text-center my-auto">Education Funding</span>
                </a>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                    <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/images/icons/icon building project.png')}}" alt="icon">
                    </div>
                    <span class="font-semibold text-center my-auto">Building Project</span>
                </a>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                    <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/images/icons/icon animals rescue.png')}}" alt="icon">
                    </div>
                    <span class="font-semibold text-center my-auto">Humanity</span>
                </a>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                    <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/images/icons/icon animals rescue.png')}}" alt="icon">
                    </div>
                    <span class="font-semibold text-center my-auto">Orphans</span>
                </a>
            </div>
        </div>
    </div>
    <div id="best-choices" class="mt-8 -mb-6">
        <div class="px-4 flex justify-between items-center">
            <h2 class="font-bold text-lg">KitaBantu <br>Best Choices</h2>
            <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">Explore All</a>
        </div>
        <div class="main-carousel mt-[14px]">
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                    <a href="details.html">
                        <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                            <img src="{{asset('assets/images/thumbnails/th1.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </a>
                    <div class="flex flex-col gap-[6px]">
                        <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Makanan Bergizi Warga Terdampar</a>
                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 800.000.000</span></p>
                    </div>
                    <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                </div>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                    <a href="details.html">
                        <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                            <img src="{{asset('assets/images/thumbnails/th2.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </a>
                    <div class="flex flex-col gap-[6px]">
                        <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Bangun Panti Asuhan 10,000 Yatim Piatu</a>
                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 25.000.000</span></p>
                    </div>
                    <progress id="fund" value="66" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                </div>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                    <a href="details.html">
                        <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                            <img src="{{asset('assets/images/thumbnails/th3.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </a>
                    <div class="flex flex-col gap-[6px]">
                        <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Banjir 10 Meter Kota Saranjopa Iyola</a>
                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 12.000.000</span></p>
                    </div>
                    <progress id="fund" value="10" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                </div>
            </div>
            <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                    <a href="details.html">
                        <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                            <img src="{{asset('assets/images/thumbnails/th4.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </a>
                    <div class="flex flex-col gap-[6px]">
                        <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Perbaikan Asli Kebakaran Hutan</a>
                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 800.000.000</span></p>
                    </div>
                    <progress id="fund" value="88" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                </div>
            </div>
        </div>
    </div>
    <div id="latest-fundrising" class="mt-8">
        <div class="px-4 flex justify-between items-center">
            <h2 class="font-bold text-lg">Latests <br>Fundraisings</h2>
            <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">Explore All</a>
        </div>
        <div class="flex flex-col gap-4 mt-[14px] px-4">
            <a href="details.html" class="card">
                <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="{{asset('assets/images/thumbnails/th5.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold line-clamp-1 hover:line-clamp-none">Operasi Ginjal Kanan</p>
                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p>
                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="{{asset('assets/images/icons/tick-circle.svg')}}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="{{asset('assets/images/thumbnails/th6.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold line-clamp-1 hover:line-clamp-none">Buku Edukasi Peduli Anak lorem ipsum</p>
                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 800.000.000</span></p>
                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="{{asset('assets/images/icons/tick-circle.svg')}}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="{{asset('assets/images/thumbnails/th7.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold line-clamp-1 hover:line-clamp-none">Bangun Desa Angga</p>
                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 18.500.000.000</span></p>
                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="{{asset('assets/images/icons/tick-circle.svg')}}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div id="menu" class="max-w-[341px] w-full fixed bottom-[20px] p-3 flex items-center justify-between rounded-[30px] bg-[#1E2037] transform -translate-x-1/2 left-1/2">
        <a href="" class="p-[14px_16px] flex items-center gap-[6px] rounded-full bg-[#FF7815]">
            <div class="flex shrink-0">
                <img src="{{asset('assets/images/icons/heart.svg')}}" alt="icon">
            </div>
            <span class="font-semibold text-sm text-white">Discover</span>
        </a>
        <a href="" class="flex items-center justify-center w-[56px] h-[52px] p-[14px_16px]">
            <div class="flex shrink-0 w-6 h-6 overflow-hidden">
                <img src="{{asset('assets/images/icons/crown.svg')}}" alt="icon">
            </div>
        </a>
        <a href="" class="flex items-center justify-center w-[56px] h-[52px] p-[14px_16px]">
            <div class="flex shrink-0 w-6 h-6 overflow-hidden">
                <img src="{{asset('assets/images/icons/3dcube.svg')}}" alt="icon">
            </div>
        </a>
        <a href="" class="flex items-center justify-center w-[56px] h-[52px] p-[14px_16px]">
            <div class="flex shrink-0 w-6 h-6 overflow-hidden">
                <img src="{{asset('assets/images/icons/setting-2.svg')}}" alt="icon">
            </div>
        </a>
    </div>
</section>
@endsection

