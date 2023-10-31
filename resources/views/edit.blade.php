<x-app-layout>
    <div class="fixed inset-0">
        <div class="bg-gray-500 opacity-75 pointer-events-none"></div>
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white rounded-lg w-1/2 p-4">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-4">Edit Product</h3>

                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-4">
                            <label for="name" class="block mb-2 font-bold p-4">Name</label>
                            <input type="text" name="name" id="name" value="{{ $product->name }}" placeholder="Enter your product name" class="w-full px-4 py-2 rounded border border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div class="mb-4">
                            <label for="picture" class="block mb-2 font-bold">Picture</label>
                            <input type="file" name="picture" id="picture" class="w-full">
                        </div>

                        <div class="flex justify-end">
                            <a href="{{ route('dashboard') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-2">Cancel</a>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
