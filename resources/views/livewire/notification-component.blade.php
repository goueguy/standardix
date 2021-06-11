<div class="flex items-center justify-end mb-3">
    <button class="hover:opacity-75 focus:outline-none" @click="open = true">
        <span class="flex justify-end mr-6 flex-end">
            <svg class="w-10 h-10 text-opacity-100 text-medium" viewBox="0 0 88 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44 101C47.3152 101 50.4946 99.683 52.8388 97.3388C55.183 94.9946 56.5 91.8152 56.5 88.5H31.5C31.5 91.8152 32.817 94.9946 35.1612 97.3388C37.5054 99.683 40.6848 101 44 101ZM50.2187 7.86876C50.306 6.99972 50.2101 6.12204 49.9373 5.29234C49.6645 4.46263 49.2208 3.69932 48.6349 3.05162C48.0489 2.40392 47.3337 1.88622 46.5354 1.53191C45.7371 1.1776 44.8734 0.994537 44 0.994537C43.1266 0.994537 42.2629 1.1776 41.4646 1.53191C40.6663 1.88622 39.9511 2.40392 39.3651 3.05162C38.7792 3.69932 38.3355 4.46263 38.0627 5.29234C37.7899 6.12204 37.694 6.99972 37.7813 7.86876C30.717 9.30564 24.3664 13.1398 19.8048 18.7219C15.2432 24.304 12.7509 31.2911 12.75 38.5C12.75 45.3625 9.625 76 0.25 82.25H87.75C78.375 76 75.25 45.3625 75.25 38.5C75.25 23.375 64.5 10.75 50.2187 7.86876V7.86876Z" fill="#2E3A59"/>
                </svg>
                @if(count($notifs)>0)
                    <span class="absolute flex items-center w-5 h-5 p-1 my-1 mt-1 text-xs bg-red-700 border-2 border-white rounded-full z-2 justify-content-center"><span class="font-bold text-white">{{count($notifs)}}</span></span>
                @else
                    <span class="absolute w-3 h-3 my-1 mt-1 border-2 border-white rounded-full bg-medium z-2"></span>
                @endif
        </span>
    </button>
    <div x-show="open" @click.away="open = false" class="absolute z-10 w-1/2 bg-white border rounded shadow-lg right-24 top-10 md:w-1/3">
        <div class="bg-teal-500 rounded-t">
        <div class="relative flex px-2 py-3 bg-blue-100">
            <span class="text-sm font-semibold text-center text-blue-400 md:text-base">Notifications</span>
        </div>
        </div>
        <div class="h-24 p-4 text-sm bg-gray-200 border-b md:text-base">
            <ul class="flex flex-col">
                @foreach ($notifs as $notif)
                    <li class="px-2 my-1 ml-3 text-sm hover:bg-gray-100"><a href="#" class="flex flex-row justify-between hover:opacity-75"><span class="hover:underline">{{$notif->content}}</span> <span class="text-xs italic">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notif->created_at)->diffForHumans()}}</span></a></li>
                @endforeach
            </ul>
        </div>
        {{-- <div class="flex justify-end p-2 rounded-b">
            <button class="w-24 px-2 py-1 mr-2 text-white bg-blue-700 rounded focus:outline-none md:py-2 md:px-3 hover:bg-blue-600">OK</button>
            <button class="w-24 px-2 py-1 text-white bg-red-700 rounded focus:outline-none md:py-2 md:px-3 hover:bg-red-600">Cancel</button>
        </div> --}}
    </div>
</div>

