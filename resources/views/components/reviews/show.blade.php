<div class="flex flex-row p-5 shadow rounded-xl bg-white">
    <div class="bg-gradient-to-b from-gray-50 to-gray-100 w-24 h-24 rounded-2xl" >
    </div>
    <div class="flex-row">
        <div class="flex-col ml-6 flex-grow">
            <h1 class="text-4xl font-sans text-gray-900 font-black ">
                {{ $review->userName }}
            </h1>
            <h2 class="text-blue-500 font-sans font-black text-2xl"> {{ $review->content }} €</h2>
        </div>
    </div>
</div>

