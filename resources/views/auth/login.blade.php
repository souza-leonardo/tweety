<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="col-md-8">

                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                email
                            </label>

                            <input
                                type="email"
                                class="border border-gray-400 p-2 w-full"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                autofocus
                            />

                            @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                password
                            </label>

                            <input
                                type="password"
                                class="border border-gray-400 p-2 w-full"
                                name="password"
                                id="password"
                                required
                                autocomplete="current-password"
                            />

                            @error('password')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <div>
                                <input
                                    type="checkbox"
                                    class="mr-1"
                                    name="remember"
                                    id="remember"
                                    {{ old('remember') ? ' checked' : '' }}
                                />

                                <label for="remember"
                                    class="uppercase font-bold text-xs text-gray-700">
                                    Remember Me
                                </label>
                            </div>

                            @error('remember')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">Submit</button>

                            <a href="{{ route('password.request') }}" class="text-xs text-gray-700">Forgot Your Password?</a>
                        </div>
                    </form>


        </div>
    </div>
</div>
</x-master>
