<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Withdrawal Informations') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                <h3 class="text-indigo-950 text-3xl font-bold mb-5">Request for Withdrawal</h3>
                <div class="flex flex-row gap-x-16">
                    <svg width="100" height="100" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M19 10.2798V17.4298C18.97 20.2798 18.19 20.9998 15.22 20.9998H5.78003C2.76003 20.9998 2 20.2498 2 17.2698V10.2798C2 7.5798 2.63 6.7098 5 6.5698C5.24 6.5598 5.50003 6.5498 5.78003 6.5498H15.22C18.24 6.5498 19 7.2998 19 10.2798Z" fill="#292D32"/>
                        <path d="M22 6.73V13.72C22 16.42 21.37 17.29 19 17.43V10.28C19 7.3 18.24 6.55 15.22 6.55H5.78003C5.50003 6.55 5.24 6.56 5 6.57C5.03 3.72 5.81003 3 8.78003 3H18.22C21.24 3 22 3.75 22 6.73Z" fill="#292D32"/>
                        <path d="M6.96027 18.5601H5.24023C4.83023 18.5601 4.49023 18.2201 4.49023 17.8101C4.49023 17.4001 4.83023 17.0601 5.24023 17.0601H6.96027C7.37027 17.0601 7.71027 17.4001 7.71027 17.8101C7.71027 18.2201 7.38027 18.5601 6.96027 18.5601Z" fill="#292D32"/>
                        <path d="M12.5494 18.5601H9.10938C8.69938 18.5601 8.35938 18.2201 8.35938 17.8101C8.35938 17.4001 8.69938 17.0601 9.10938 17.0601H12.5494C12.9594 17.0601 13.2994 17.4001 13.2994 17.8101C13.2994 18.2201 12.9694 18.5601 12.5494 18.5601Z" fill="#292D32"/>
                        <path d="M19 11.8599H2V13.3599H19V11.8599Z" fill="#292D32"/>
                        </svg>
                    <div class="flex flex-col gap-y-10">    
                        <div>
                            <p class="text-slate-500 text-sm">Total Amount</p>
                            <h3 class="text-indigo-950 text-xl font-bold">Rp 183409</h3>
                        </div>
                        <span class="w-fit text-sm font-bold py-2 px-3 rounded-full bg-green-500 text-white">
                            SUCCESS
                        </span>
                        <span class="w-fit text-sm font-bold py-2 px-3 rounded-full bg-orange-500 text-white">
                            PENDING
                        </span> 
                        <div>
                            <p class="text-slate-500 text-sm">Date</p>
                            <h3 class="text-indigo-950 text-xl font-bold">12 Jan 2024</h3>
                        </div>
                        <div class="">
                            <p class="text-slate-500 text-sm">Fundraiser</p>
                            <h3 class="text-indigo-950 text-xl font-bold">Annima Poppo</h3>
                        </div>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1611174797136-5e167ea90d6c?q=80&w=3120&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="rounded-2xl object-cover w-[300px] h-[200px] mb-3">
                        <h3 class="text-indigo-950 text-xl font-bold">Kebakaran Hutan</h3>
                        <p class="text-slate-500 text-sm">Rp 38940909</p>
                    </div>
                </div>
                <hr class="my-5">
                <h3 class="text-indigo-950 text-xl font-bold mb-5">Send Funding to:</h3>
                <div class="flex flex-row gap-x-10">    
                    <div>
                        <p class="text-slate-500 text-sm">Bank</p>
                        <h3 class="text-indigo-950 text-xl font-bold">Angga Capital</h3>
                    </div>
                    <div>
                        <p class="text-slate-500 text-sm">No Account</p>
                        <h3 class="text-indigo-950 text-xl font-bold">08123092093</h3>
                    </div>
                    <div>
                        <p class="text-slate-500 text-sm">Account Name</p>
                        <h3 class="text-indigo-950 text-xl font-bold">Indonesia Berbagi</h3>
                    </div>
                    <div>
                        <p class="text-slate-500 text-sm">SWIFT Code</p>
                        <h3 class="text-indigo-950 text-xl font-bold">ANCAP</h3>
                    </div>
                </div>
                <hr class="my-5">
                <h3 class="text-indigo-950 text-xl font-bold mb-5">Already Proccessed</h3>
                <img src="https://i.pinimg.com/236x/68/ed/dc/68eddcea02ceb29abde1b1c752fa29eb.jpg" alt="" class="rounded-2xl object-cover w-[300px] h-[200px] mb-3">
                <hr class="my-5">
                <form action="#" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mt-4 w-fit">
                        <x-input-label for="proof" :value="__('proof')" />
                        <x-text-input id="proof" class="mb-7 block mt-1 w-full" type="file" name="proof" required autofocus autocomplete="proof" />
                        <x-input-error :messages="$errors->get('proof')" class="mt-2" />
                    </div>
                    <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                        Confirm Withdrawal
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
