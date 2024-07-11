<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Fundraisings') }}
            </h2>
            <a href="#" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                @forelse ($fundraisings as $fundraising)
                <div class="item-card flex flex-col md:flex-row gap-y-10 justify-between md:items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{Storage::url($fundraising->thumbnail)}}" alt="" class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">{{$fundraising->name}}</h3>
                            <p class="text-slate-500 text-sm">{{$fundraising->category->name}}</p>
                        </div>
                    </div>
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Target Amount</p>
                        <h3 class="text-indigo-950 text-xl font-bold">Rp {{$fundraising->target_ammount}}</h3>
                    </div>
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Donaturs</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{$fundraising->donaturs->count()}}</h3>
                    </div>
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Fundraiser</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{$fundraising->fundraiser->user->name}}</h3>
                    </div>
                    <div class="hidden md:flex flex-row items-center gap-x-3">
                        <a href="#" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            View Details
                        </a>
                    </div>
                </div>
                @empty
                <p>Belum ada data fundraising saat ini</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
