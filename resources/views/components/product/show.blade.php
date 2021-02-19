<div class="flex flex-row p-5 shadow rounded-xl">

    @if($product->imageUrl !== null)
        <div style="background-image: url('{{ $product->imageUrl }}')" class="bg-contain bg-no-repeat w-24 h-24 rounded"></div>
    @else
        <div class="bg-gradient-to-b from-gray-50 to-gray-100 w-24 h-24 rounded-2xl" >
        </div>
    @endif
    <div class="flex-col ml-6 flex-grow">
    <h1 class="text-4xl font-sans text-gray-900 font-black ">
        {{ $product->name }}
    </h1>
    <h2 class="text-blue-500 font-sans font-black text-2xl"> {{ $product->price }} €</h2>
    </div>
</div>

