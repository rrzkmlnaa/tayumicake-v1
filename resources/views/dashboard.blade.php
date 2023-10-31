<style>
    #myModal {
        z-index: 9999;
    }

    #myModal .bg-gray-500 {
        position: fixed;
    }

    #myModal .bg-white {
        position: relative;
        z-index: 1;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <div class="mb-4 flex justify-between">
                    <h2 class="text-2xl font-bold">Product List</h2>
                    <button id="openModalButton"
                        class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Add Product</button>
                </div>

                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-100 border-b">Name</th>
                            <th class="px-6 py-3 bg-gray-100 border-b">Picture</th>
                            <th class="px-6 py-3 bg-gray-100 border-b"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4 border-b">{{ $product->name }}</td>
                                <td class="px-6 py-4 border-b">
                                    <img src="{{ $product->picture }}" alt="{{ $product->name }}"
                                        class="h-10 w-10 rounded-full">
                                </td>
                                <td class="px-6 py-4 border-b">
                                    <a href="{{ route('product.edit', $product->id) }}"
                                        class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                                    <form class="inline-block" action="{{ route('product.delete', $product->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this product?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-app-layout>

<div id="myModal" class="hidden fixed inset-0 flex items-center justify-center">
    <div class="fixed inset-0 bg-gray-500 opacity-75"></div>
    <div class="bg-white rounded-lg w-1/2">
        <div class="p-4">
            <h3 class="text-lg font-bold mb-4">Add Product</h3>

            <form action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="mb-4 px-1">
                    <label for="name" class="block mb-2 font-bold">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your product name"
                        class="w-full px-4 py-2 rounded border border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="picture" class="block mb-2 font-bold">Picture</label>
                    <input type="file" name="picture" id="picture" class="w-full">
                </div>

                <div class="flex justify-end">
                    <button type="button" id="closeModalButton"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-2">Cancel</button>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>



<script>
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('myModal');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    const edit = document.getElementById('openEditModal');
</script>
