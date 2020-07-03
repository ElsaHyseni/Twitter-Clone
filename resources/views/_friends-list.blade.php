@auth
<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-6 ">Following</h3>
    <ul>
        @forelse(auth()->user()->follows as $user)
          <li class="{{ $loop->last ? '' : 'mb-4' }}">

              <div>
              <a href="{{ $user->path() }}" 
              class="flex items-center text-sm">
                  <img
                  src="{{$user->avatar}}"
                  alt=""
                  class="rounded-full mr-2"
                  height="50"
                  width="50"
                  >

                  {{$user->name}}
                </a>  
              </div>
          </li>

         @empty  <p class="text-center">No friends yet :(</p>
        @endforelse
    </ul>
</div> 

@endauth