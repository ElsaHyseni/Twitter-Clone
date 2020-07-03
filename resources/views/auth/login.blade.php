<x-master>
<div class="container mx-auto flex justify-center">
    <div class=" px-20 py-8 bg-gray-200 border border-purple-400">
            <div class="text-center font-bold text-lg mb-6">{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                <div class="mb-6">
                    <label for="email" 
                    class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email              
                    </label>
                        <input type="email" name="email" id="email" 
                          class="border border-gray-400 p-2 w-full"
                          autocomplete="email" value="{{ old('email') }}"
                          required >

                    @error('email')
                       <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror 
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Password
                    </label>

                    <input type="password" name="password" id="password" 
                    class="border border-gray-400 p-2 w-full" required>

                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror    
                </div>

                <div class="mb-6">
                    <div>
                        <input type="checkbox" class="mr-1" 
                        name="remember" id="remember"
                        {{ old('remember') ? 'checked' : ''}}>

                        <label for="remember" class="text-xs text-gray-700 font-bold uppercase">
                            Remember Me
                        </label>
                    </div>

                    @error('remember')
                     <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>


                <div class="flex items-center">
                    <button type="submit" 
                    class="bg-purple-400 text-white rounded py-2 px-4 mt-2 hover:bg-purple-700 ">
                    Submit</button>

                    <a href=" {{ route('password.request') }} " class="text-xs text-gray-700 ml-3 mt-6">Forgot Your Password?</a>

                </div>

            </form>
        </div>
    </div>
</div>
</x-master>
