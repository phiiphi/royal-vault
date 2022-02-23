@extends('layouts.app')
@section('content')
    <x-slider/>
    <div class="block md:flex mx-2 my-6 md:mx-8 dark:bg-white">
        <div class="block w-full items-center md:w-2/3 h-72 md:my-16 mx-2">
            <div class="md:pt-6">
                <h3 class="mx-2 w-full text-xl text:4xl md:text-6xl font-bold item-center">
                    Loyal Bullion Security Vaults
                </h3>
                <p class="mx-2">
                    Our mission is to provide the world's best <a class="text-l md:text-xl font-bold underline text-amber-400 hover:text-red-800" href="#">gold bullion storage</a> facility with unparalleled service and discretion. Your gold bullion is allocated, segregated and secured in our <a class="text-l md:text-xl font-bold underline text-amber-400 hover:text-red-800" href="#">Auckland facility</a> that provides a world class level of peace of mind.
                    Strategically located in one of the safest countries in the world,
                    New Zealand Bullion Depository provides private offshore gold storage for discerning individuals and groups. With state of the art technology and equipment we ensure secure wealth protection for this generation and beyond. 
                </p>

            </div>
          
        </div>
        <div class="w-full md:mx-2 mt-14 md:w-1/3 shadow-lg">
            <div class="relative overflow-hidden mt-4 max-w-full w-full" style="padding-bottom: 56.25%">
                <iframe
                    src="https://www.youtube.com/embed/0sxNs6zzQIg"
                    frameborder="0"
                    allowfullscreen
                    class="absolute top-0 left-0 w-full h-full"
                ></iframe>
            </div>
        </div>
    </div>
    <div class="bg-white mt-2">
      <div class="block mx-4 md:my-2 md:mx-20 md:flex shadow-lg justify-center items-center">
        <div class="w-full my-2 md:w-1/3 shadow-lg h-96">
            <div class="h-52 w-full">
                <img
                src="https://picsum.photos/id/1005/600/600"
                class="h-52 w-full object-cover overflow-hidden"
                alt=""
                />
            </div>
            <div class="px-2">
                <h3 class="font-bold text-xl tracking-wide mt-3">
                    Insurance
                </h3>
                <p class="mt-3 	tracking-wide">
                    Loyal Bullion Security Vault recognises that true service goes beyond safeguarding your precious metals, but also to securing your peace of mind.
                </p>
            </div>
          
        </div>
        <div class="w-full md:mx-2 my-2 md:w-1/3 h-96 shadow-lg">
            <div class="h-52 w-full">
                <img
                src="https://picsum.photos/id/1005/600/600"
                class="h-52 w-full object-cover overflow-hidden"
                alt=""
                />
            </div>
            <div class="px-2">
                <h1 class="font-bold text-xl mt-3 tracking-wide">
                    Auditing
                </h1>
                <p class="mt-3 tracking-wide">
                    Even before the first safe was purchased, we have worked with specialised organisations to ensure that our service is the most comprehensively covered, understood, and secure we could create
                </p>
            </div>
        </div>
        <div class="w-full md:w-1/3 shadow-lg h-96">
          <div class="h-52 w-full">
            <img
              src="https://picsum.photos/id/1005/600/600"
              class="h-52 w-full object-cover overflow-hidden"
              alt=""
            />
          </div>
          <div class="px-2">
            <h1 class="font-bold text-xl mt-3 tracking-wide">
                Technology
            </h1>
            <p class="mt-3 tracking-wide">
                LBSV is dedicated to providing a service that exceeds expectations and gives you peace of mind. Every effort is taken to ensure uncompromised security at all times.
            </p>
          </div>

      
        </div>
       
      </div>
    </div>
@endsection