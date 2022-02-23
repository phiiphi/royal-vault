@extends('layouts.app')
@section('content')
<div class="shadow-lg mt-10 mx-4 md:mx-20 h-90">
    <div class=" bg-stone-800 border-b-gray-700">
        <div class="flex flex-row mx-4 text-white justify-between tracking-wide h-12 items-center">       
            <h3 class="flex-start font-bold">TRACK</h3>
            <div class="flex mx-2 flex-row items-center flex-end">
                <p class="mx-1">help</p>
                <i class="fa-solid fa-circle-info"></i>
            </div>
        </div>

    </div>
    <form method="GET" class="my-5 ml-5 items-center" action="{{route('tracking.create')}}">
        {{ csrf_field() }}
        <input class=" border-2 border-gray-700 w-3/5 h-12 my-2" type="text" name="code" placeholder="Tracking Number">
        <a href="{{route('tracking.create')}}">
            <button class="flex rounded-full px-4 justify-center bg-yellow-500 w-30 items-center h-10 border-2 border-gray-700">
                Track <i class="fa fa-chevron-right mx-2"></i>
            </button>  
        </a>

    </form>

    @if ($errors->any())
        <div class="block bg-red-700 p-5 w-full sm:w-1/2 px-10">
            <div class="flex space-x-3">
                <div class="">
                    <div class="text-sm">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm text-red-600">{{$error}}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
       
</div>
@endsection