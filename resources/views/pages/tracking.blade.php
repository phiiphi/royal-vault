@extends('layouts.app')
@section('content')
<div class="border-2 mt-10 mx-4 md:mx-8 border-gray-700 h-44">
    <div class="border-b-2 bg-stone-800 border-b-gray-700">
        <div class="flex flex-row mx-4 text-white justify-between tracking-wide h-12 items-center">
            <h3 class="flex-start font-bold">TRACK</h3>
            <div class="flex mx-2 flex-row flex-end">
                <p class="mx-1">help</p>
                <div class="border-2  border-white rounded-full h-6 w-6 ">
                    <i class="items-center fa-solid fa-question"></i>
                </div>
            </div>
        </div>
    </div>
    <form method="post" class="flex flex-row my-5 ml-5 items-center" action="{{route('tracking')}}">
        <input class=" border-2 border-gray-700 w-3/5 h-12" type="text" name="code" placeholder="Tracking Number">
        <button class="flex px-4 justify-center bg-yellow-500 w-20 items-center h-12 border-2 border-gray-700">
            <i class="fa fa-chevron-right mx-2"></i>
            <i class="fa fa-chevron-right mx-2"></i>
        </button>  
    </form>
</div>
@endsection