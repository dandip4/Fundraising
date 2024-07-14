<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Donaturs') }}
            </h2>
        </div>
    </x-slot>
    <div>

    </div>
    <div class="list-donaturs py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                @forelse ($donaturs as $donatur)
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{Storage::url($donatur->fundraising->thumbnail)}}" alt="" class="rounded-2xl object-cover w-[90px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">{{$donatur->name}}</h3>
                            <p class="text-slate-500 text-sm">{{$donatur->created_at}}</p>
                        </div>
                    </div>
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Amount</p>
                        <h3 class="text-indigo-950 text-xl font-bold">Rp {{number_format($donatur->total_amount, 0, ',','.')}}</h3>
                    </div>
                    @if($donatur->is_paid)
                    <span class="w-fit text-sm font-bold py-2 px-3 rounded-full bg-green-500 text-white">
                        PAID
                    </span>
                    @else
                    <span class="w-fit text-sm font-bold py-2 px-3 rounded-full bg-orange-500 text-white">
                        PENDING
                    </span>
                    @endif
                    <div class="hidden md:flex flex-row items-center gap-x-3">
                        <a href="{{route('admin.donaturs.show', $donatur)}}" type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            View Details
                        </a>
                    </div>
                </div>
                @empty
                <p>Belum ada donatur terbaru saat ini</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
