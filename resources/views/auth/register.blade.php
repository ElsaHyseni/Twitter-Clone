<x-master>
<div class="container mx-auto flex justify-center ">
    <div class="px-40 py-8 bg-gray-200 border border-purple-400" >
        <div class="col-md-8">
              <div class="text-center font-bold text-lg mb-5 ">{{ __('Register') }}</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Username
                            </label>

                            <input type="text" name="username" id="username" 
                            class="border border-gray-400 p-2 w-full" 
                            required>

                            @error('username')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror    
                        </div>

                        <div class="mb-4">
                            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Name
                            </label>

                            <input type="text" name="name" id="name" 
                            class="border border-gray-400 p-2 w-full" 
                             required>

                            @error('name')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror    
                        </div>

                        <div class="mb-4">
                           <label for="email" 
                           class="block mb-2 uppercase font-bold text-xs text-gray-700">
                               Email              
                           </label>
                               <input type="email" name="email" id="email" 
                                 class="border border-gray-400 p-2 w-full"
                                 autocomplete="email" 
                                 required >

                           @error('email')
                              <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                           @enderror 
                        </div>

                        <div class="mb-5">
                            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Password
                            </label>

                            <input type="password" name="password" id="password" 
                            class="border border-gray-400 p-2 w-full" required>

                            @error('password')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror    
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Password Confirmation
                            </label>

                            <input type="password" name="password_confirmation" id="password_confirmation" 
                            class="border border-gray-400 p-2 w-full" required>

                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror    
                        </div>


                        <div class="mb-3 text-center">
                                <button type="submit" class="bg-purple-400 text-white rounded py-2 px-4 hover:bg-purple-700">
                                    {{ __('Register') }}
                                </button> 
                        </div>
                    </form>
    </div>
</div>
</x-master>
