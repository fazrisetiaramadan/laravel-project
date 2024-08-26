<x-layout>
    <h1 class="title">Request a password reset email</h1>

    {{-- Session Messages --}}
    @if (session('status'))
        <x-flashMsg msg="{{ session('status') }}" />
    @endif

    <div class="card mb-4 p-6 rounded-lg shadow-md bg-white">
        <form action="{{ route('password.request') }}" method="post"  x-data="formSubmit" @submit.prevent="submit">
            @csrf

            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old('email') }}"
                    class="input @error('email') ring-red-500 @enderror">

                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button --}}
            <button x-ref="btn" class="w-full bg-[#1b2a41] text-white py-2 px-4 rounded-lg hover:bg-[#162230] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Submit</button>
        </form>
    </div>
</x-layout>