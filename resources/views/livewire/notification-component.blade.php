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
<div x-show="open" @click.away="open = false" class="absolute w-1/2 bg-white border rounded shadow-lg z-60 right-24 top-10 md:w-1/3">
    <div class="bg-teal-500 rounded-t">
    <div class="relative flex px-2 py-3 bg-blue-100">
        <span class="text-sm font-semibold text-center text-blue-400 md:text-base">Notifications</span>
    </div>
    </div>
    <div class="h-24 p-4 text-sm bg-gray-200 border-b md:text-base">
        <ul class="flex flex-col">
            @foreach ($notifs as $notif)
                <li class="px-2 my-1 ml-3 text-sm hover:bg-gray-100"><a href="#" id="openModalLink" data-content="{{$notif->content}}" class="flex flex-row justify-between contentClass modal-open hover:opacity-75"><span class="hover:underline">{{$notif->content}}</span> <span class="text-xs italic">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notif->created_at)->diffForHumans()}}</span></a></li>
            @endforeach
        </ul>
    </div>
    </div>
</div>

<div class="fixed top-0 right-0 flex items-center justify-center h-full opacity-0 pointer-events-none modal">
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

    <div class="w-11/12">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint consequuntur sapiente facere, illo facilis nihil magnam eveniet possimus omnis mollitia, totam ipsam quo fugiat commodi obcaecati tempora culpa repellendus ab.
    </div>

    <!--Footer-->
    <div class="flex justify-end pt-2">
        <button class="p-3 px-4 text-white bg-blue-400 rounded-lg modal-close hover:bg-gray-400">Fermer</button>
    </div>

    </div>
</div>
</div>
<script src="{{asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
var openmodal = document.querySelectorAll('.modal-open')
for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event){
    event.preventDefault()
    toggleModal()
    })
}

const overlay = document.querySelector('.modal-overlay')
overlay.addEventListener('click', toggleModal)

var closemodal = document.querySelectorAll('.modal-close')
for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
}

document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
    isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
    isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
    toggleModal()
    }
};

function toggleModal () {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
}

$("#openModalLink").click(function(e){
    e.preventDefault();
    $(".contentClass").each(function(){
        alert($(this).attr("data-content"));
    });

});
</script>
