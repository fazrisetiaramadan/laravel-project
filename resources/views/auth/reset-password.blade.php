<x-layout>
    <h1 class="title">Reset your password</h1>

    <div class="card mb-4 p-6 rounded-lg shadow-md bg-white">
        <form action="{{ route('password.update') }}" method="post">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

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


            {{-- Submit Button --}}
            <button class="w-full bg-[#1b2a41] text-white py-2 px-4 rounded-lg hover:bg-[#162230] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Reset Password</button>
        </form>
    </div>
</x-layout>


