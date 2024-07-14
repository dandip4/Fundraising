@extends('FE.layouts.app')
@section('title', 'checkout')
@section('content')
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden">
        <div class="header flex flex-col overflow-hidden h-[220px] relative">
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="flex items-center gap-[10px]">
                    <a href="details.html" class="w-10 h-10 flex shrink-0">
                        <img src="{{asset('assets/images/icons/back.png')}}" alt="icon">
                    </a>
                </div>
                <div class="flex flex-col items-center text-center">
                    <p class="font-semibold text-sm">#SendSupport</p>
                </div>
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="{{asset('assets/images/icons/menu-dot.png')}}" alt="icon">
                </a>
            </nav>
            <div class="flex items-center px-4 my-auto gap-[14px]">
                <div class="w-[90px] h-[100px] flex shrink-0 rounded-2xl overflow-hidden relative">
                    <img src="{{asset('assets/images/thumbnails/th4.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                    <p class="w-[90px] h-[23px] bg-[#4541FF] text-center p-[4px_12px] absolute bottom-0 font-bold text-[10px] leading-[15px] text-white">VERIFIED</p>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="font-bold">Perbaikan Kebakaran Alam Hutani Perlidanita</p>
                    <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 12.000.000</span></p>
                </div>
            </div>
        </div>
        <div class="flex flex-col z-30">
            <div id="content" class="w-full min-h-[calc(100vh-220px)] h-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_30px]">
                <form action="" class="flex flex-col gap-5">
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold text-sm">Your Donation</p>
                        <div class="bg-[#E8E9EE] w-full flex items-center rounded-2xl p-[14px_16px] gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="{{asset('assets/images/icons/dollar-circle.png')}}" alt="icon">
                            </div>
                            <p class="font-semibold">Rp 1.000.000</p>
                        </div>
                        <input type="hidden" id="amount" name="amount" value="1000000">
                    </div>
                    <hr class="border-dashed">
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold text-sm">Send Payment to</p>
                        <div class="w-full p-4 rounded-2xl border border-[#E8E9EE]">
                            <button type="button" class="accordion-button flex w-full justify-between items-center" data-accordion="accordion-faq-1">
                                <div class="flex shrink-0 h-6 overflow-hidden">
                                    <img src="{{asset('assets/images/icons/Bank_Central_Asia.webp')}}" class="object-contain" alt="icon">
                                </div>
                                <div class="arrow w-5 h-5 flex shrink-0 transition-all duration-300">
                                    <img src="{{asset('assets/images/icons/arrow-down.png')}}" class="" alt="icon">
                                </div>
                            </button>
                            <div id="accordion-faq-1" class="accordion-content open">
                                <div class="pt-3 flex flex-col gap-3">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-[#66697A]">Bank Name</span>
                                        <span class="font-semibold text-sm">Bank Central Asia</span>
                                        <input type="hidden" id="bank" name="bank" value="BCA">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-[#66697A]">Account Number</span>
                                        <span class="font-semibold text-sm">893092093</span>
                                        <input type="hidden" id="number" name="number" value="893092093">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-[#66697A]">Account Name</span>
                                        <span class="font-semibold text-sm">AnggaMustHelp</span>
                                        <input type="hidden" id="account" name="account" value="AnggaMustHelp">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="border-dashed">
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold text-sm">Your Name</p>
                        <div class="flex items-center w-full p-[14px_16px] rounded-2xl border border-[#E8E9EE] focus-within:border-[#292E4B] transition-all duration-300">
                            <div class="mr-[10px] w-6 h-6 flex items-center justify-center overflow-hidden">
                                <img src="{{asset('assets/images/icons/user.png')}}" class="h-full w-full object-contain" alt="icon">
                            </div>
                            <input type="text" class="font-semibold placeholder:text-[#292E4B] placeholder:font-normal w-full outline-none" placeholder="What’s your name?" name="name">
                        </div>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold text-sm">No. WhatsApp</p>
                        <div class="flex items-center w-full p-[14px_16px] rounded-2xl border border-[#E8E9EE] focus-within:border-[#292E4B] transition-all duration-300">
                            <div class="mr-[10px] w-6 h-6 flex items-center justify-center overflow-hidden">
                                <img src="{{asset('assets/images/icons/call.png')}}" class="h-full w-full object-contain" alt="icon">
                            </div>
                            <input type="number" class="font-semibold placeholder:text-[#292E4B] placeholder:font-normal w-full outline-none" placeholder="Write phone number" name="phone">
                        </div>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold text-sm">Proof of Payment</p>
                        <div class="relative">
                            <button type="button" class="p-[14px_16px] rounded-2xl flex gap-[10px] w-full border border-[#E8E9EE] focus-within:border-[#292E4B] transition-all duration-300" onclick="document.getElementById('file').click()">
                                <div class="w-6 h-6 flex shrink-0">
                                    <img src="{{asset('assets/images/icons/receipt-text.png')}}" alt="icon">
                                </div>
                                <p id="fileLabel">Add an attachment</p>
                            </button>
                            <input id="file" type="file" name="file" class="hidden" onchange="updateFileName(this)">
                        </div>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold text-sm">Your Notes</p>
                        <div class="flex w-full p-[14px_16px] rounded-2xl border border-[#E8E9EE] focus-within:border-[#292E4B] transition-all duration-300">
                            <div class="mr-[10px] w-6 h-6 flex items-center justify-center overflow-hidden">
                                <img src="{{asset('assets/images/icons/sms.png')}}" class="h-full w-full object-contain" alt="icon">
                            </div>
                            <textarea name="notes" id="notes" class="font-semibold placeholder:text-[#292E4B] placeholder:font-normal w-full outline-none" cols="30" rows="4" placeholder="Write your beautiful message"></textarea>
                        </div>
                    </div>
                    <a href="donation-finished.html" class="p-[14px_20px] bg-[#76AE43] rounded-full text-white w-full mx-auto font-semibold hover:shadow-[0_12px_20px_0_#76AE4380] transition-all duration-300 text-nowrap text-center">Confirm My Donation</a>
                </form>
            </div>
        </div>

    </section>
@endsection
