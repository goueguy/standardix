@extends("layouts.candidats")
@section('title',"Candidats::Messages")
@section('content')
<h2 class="p-2 mb-5 mt-8 font-bold bg-green-100 border-l-4 border-green-600"> <span class="pl-2">MES MESSAGES</span></h2>

    @if(session('success'))
        <div class="bg-green-300 text-center p-2 text-white">
            {{session('success')}}
        </div>
    @endif
    <div class="flex flex-col">
        @foreach ($user->unreadNotifications as $notification)
            <div class="shadow p-3 mb-4 bg-gray-200">
                <div class="flex justify-between">
                    <div>
                        {{$notification->data['message_label']}}
                    </div>
                    <form action="{{route('candidats.notifications.read',$notification->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="focus:outline-none bg-yellow p-1 rounded text-sm">Marquer comme lu</button>
                    </form>
                </div>
            </div>

        @endforeach
    </div>


@endsection
