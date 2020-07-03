<x-app>

    <h1 class="font-bold mb-5 text-xl">Edit your profile</h1>
    <hr class="mb-3">
    <form method="post" action="{{ $user->path() }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="mb-6">
        <label for="avatar" 
        class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Avatar              
        </label>
        <div class="flex">

            <input type="file" name="avatar" id="avatar" 
              class="border border-gray-400 p-2 w-full" >
              
            <img src="{{ $user->avatar }}" alt="your avatar" width="60">
        
        </div>  
        @error('avatar')
           <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror  

    </div>

    <div class="mb-6">
        <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
        Name
        </label>

        <input type="text" name="name" id="name" 
        class="border border-gray-400 p-2 w-full" 
        value="{{ $user->name }}" required>

        @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror    
    </div>

    <div class="mb-6">
        <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
        Username
        </label>

        <input type="text" name="username" id="username" 
        class="border border-gray-400 p-2 w-full" 
        value="{{ $user->username }}"required>

        @error('username')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror    
    </div>

    <div class="mb-6">
        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
        Email
        </label>

        <input type="email" name="email" id="email" 
        class="border border-gray-400 p-2 w-full" 
        value="{{ $user->email }}" required>

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
        <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
        Password Confirmation
        </label>

        <input type="password" name="password_confirmation" id="password_confirmation" 
        class="border border-gray-400 p-2 w-full" required>

        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror    
    </div>

    <div class="mb-6">
        <button type="submit" class="bg-purple-400 text-white rounded py-2 px-4 hover:bg-purple-700 mr-4">
            Submit
        </button>

        <a href="{{ $user->path() }}" class="hover:underline">Cancel</a>
    </div>

    </form>
</x-app>