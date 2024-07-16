<x-app-layout>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white rounded-md shadow-md p-4">
                <img src="{{ asset('images/longboard.jpg') }}" alt="Longboard" class="w-full rounded-md">
                <h2 class="text-xl font-medium mt-4">Longboard</h2>
                <p class="text-gray-500">$500</p>
            </div>
            <div class="bg-white rounded-md shadow-md p-4">
                <img src="{{ asset('images/shortboard.jpg') }}" alt="Shortboard" class="w-full rounded-md">
                <h2 class="text-xl font-medium mt-4">Shortboard</h2>
                <p class="text-gray-500">$400</p>
            </div>
            <div class="bg-white rounded-md shadow-md p-4">
                <img src="{{ asset('images/surfboard_leash.jpg') }}" alt="surfboard leash" class="w-full rounded-md">
                <h2 class="text-xl font-medium mt-4">Surf Leash</h2>
                <p class="text-gray-500">$50</p>
            </div>
            <div class="bg-white rounded-md shadow-md p-4">
                <img src="{{ asset('images/sexwax.jpg') }}" alt="sex wax" class="w-full rounded-md">
                <h2 class="text-xl font-medium mt-4">Board Wax</h2>
                <p class="text-gray-500">$10</p>
            </div>
        </div>
    </div>
</x-app-layout>
