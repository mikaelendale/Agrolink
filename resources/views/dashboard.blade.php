<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
          <img
            src="https://hips.hearstapps.com/hmg-prod/images/bananas-bunch-1535038089.jpg?crop=1xw:1xh;center,top&resize=640:*"
            class="h-full w-full object-cover"
          />
        </div>
        <div class="p-6">
          <div class="mb-2 flex items-center justify-between">
            <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
              Apple AirPods
            </p>
            <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
              $95.00
            </p>
          </div>
          <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
            With plenty of talk and listen time, voice-activated Siri access, and an
            available wireless charging case.
          </p>
        </div>
        <div class="p-6 pt-0">
          <button
            class="block w-full  select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
          >
            Add to Cart
          </button>
        </div>
      </div>
      
      
     
    
    </div></div><br><br>
</x-app-layout> 
<x-footer></x-footer>