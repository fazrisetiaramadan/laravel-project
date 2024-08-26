<x-layout>
    <h1 class="title">Register a new account</h1>

    <div class="card mb-4 p-6 rounded-lg shadow-md bg-white">
        <form action="{{ route('register') }}" method="post" x-data="formSubmit" @submit.prevent="submit">
            @csrf

            {{-- Username --}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" value="{{ old('username') }}"
                    class="input  @error('username') ring-red-500 @enderror">

                @error('username')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old('email') }}"
                    class="input @error('email') ring-red-500 @enderror">

                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="input @error('password') ring-red-500 @enderror">

                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div class="mb-8">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation"
                    class="input @error('password') ring-red-500 @enderror">
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" name="subscribe" id="subscribe" class="mr-2">
                <label for="subscribe" class="text-sm">Subscribe to our newsletter</label>
            </div>


            {{-- Submit Button --}}
            <button x-ref="btn" class="w-full bg-[#1b2a41] text-white py-2 px-4 rounded-lg hover:bg-[#162230] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Register</button>
        </form>
    </div>
</x-layout>