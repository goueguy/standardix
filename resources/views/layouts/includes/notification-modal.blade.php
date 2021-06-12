
<div class="fixed top-0 right-0 flex items-center justify-center w-full h-full opacity-0 pointer-events-none modal">
    <div class="absolute w-full h-full bg-gray-900 opacity-50 modal-overlay"></div>

    <div class="z-50 w-6/12 overflow-y-auto bg-white rounded shadow-lg ml-80 modal-container">

        <div class="absolute top-0 right-0 z-50 flex flex-col items-center mt-4 mr-4 text-sm text-white cursor-pointer modal-close">
        <svg class="text-white fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="px-6 py-4 text-left modal-content">
        <!--Title-->
        <div class="flex items-center justify-between pb-3">
            <p class="text-2xl font-bold text-blue-400">Notifications!</p>
            <div class="z-50 cursor-pointer modal-close">
            <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            </div>
        </div>

        <!--Body-->

        <div class="w-11/12 pr-8" id="content">
        </div>

        <!--Footer-->
        <div class="flex justify-end pt-2">
            <button class="p-3 px-4 text-white bg-blue-400 rounded-lg modal-close hover:bg-gray-400">Fermer</button>
        </div>

        </div>
    </div>
</div>
<script src="{{asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/notifications-modals.js')}}"></script>
