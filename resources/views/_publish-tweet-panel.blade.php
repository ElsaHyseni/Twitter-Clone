 <div class="border border-purple-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body"class="w-full" 
                    placeholder="What's on your mind?"
                    required>
                    </textarea>
                    <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
               src="{{ auth()->user()->avatar }}"
               alt="Your avatar"
               class="rounded-full mr-2"
               width="50"
               height="50"
            >
            <button type="submit" 
              class="bg-purple-500 rounded-full shadow hover:bg-purple-700 px-8 text-sm text-white h-10 "
            >Tweet</button>
        </footer>
   
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-5">{{$message}}</p>
    @enderror

 </div>