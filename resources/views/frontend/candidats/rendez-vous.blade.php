@extends("layouts.candidats")
@section('title',"CANDIDATS::RENDEZ VOUS")
@section('content')

    <h2 class="mb-5 font-bold border-l-4 border-green-600"> <span class="pl-2">MES RENDEZ-VOUS</span></h2>
        @if(count($messages)>0)
            @foreach ($messages as $message)
                <div class="inline-flex w-full mb-3 border shadow-lg">
                    <div class="w-11/12">
                        <h2 class="p-2"><a href="#">{{$message->label}}</a></h2>
                    </div>
                    <div class="w-1/12">
                        <p>A</p>
                    </div>
                </div>
                <!-- Detail message -->
                <div class="w-full border shadow-lg hidden-message">
                    <h2 class="p-2"><a href="#">{{$message->label}}</a></h2>
                </div>
            @endforeach
        @endif

@endsection