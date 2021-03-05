<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reviews') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto p-4">
            <div class="flex flex-row">
                <div class="flex flex-col w-1/4">
                    <h2 class="font-bold">Reviews</h2>
                    <div class="mt-3">
                        @foreach ($reviews as $review)
                            <div class="mb-4">
                                {{ $review->userName }}
                               {{ $review->content }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
