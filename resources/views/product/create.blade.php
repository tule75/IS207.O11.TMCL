<x-guest-layout>
    <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data" class="text-white">
        Tên
        <input type="text" name="name">
        nhập file
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
        price
        <input type="number" name="price">
        quantity
        <input type="number" name="quantity">
        <div class="mt-4">
            <x-input-label for="image" :value="__('image')" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autocomplete="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        @if (session('message'))
            <p class="text-red">Thành công</p>
        @endif
        <x-primary-button class="ml-4">
            {{ __('Thêm') }}
        </x-primary-button>

    </form>
</x-guest-layout>