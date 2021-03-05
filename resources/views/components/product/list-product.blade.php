<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto p-4">
            <div class="flex flex-row">
                <div class="flex flex-col w-1/4">
                    <h2 class="font-bold">Add a new Product</h2>
                    <form method="POST" action="/product" class="items-center flex flex-col mt-3">
                        @csrf
                        <input id="title" placeholder="Name" type="text" name="productName" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                        <input id="price" type="number" placeholder="Price" name="productPrice" class="mt-5 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                        <input id="image" type="text" placeholder="Image URL" name="productImage" class="mt-5 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                        <input type="submit" value="Add my new product" class="cursor-pointer w-min mt-6 p-4 rounded bg-pink-500 text-white font-black"/>
                    </form>
                </div>
                <div style="width:1px" class="bg-gray-200 h-screen ml-6 mr-6" ></div>
                <div class="flex flex-col flex-grow">
                    <h2 class="font-bold">My products</h2>
                    <div class="mt-3">
                        @foreach ($products as $product)
                            <div class="mb-4">
                                <x-product.show  :product="$product"></x-product.show>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
