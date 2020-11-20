<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse(current_user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div class="flex items-center text-sm">
                    <a href="{{ route('profile', $user->username) }}">
                        <img
                            src="{{ $user->avatar }}"
                            alt=""
                            class="rounded-full mr-2"
                            width="40"
                            height="40"
                        >
                    </a>

                    <a href="{{ route('profile', $user->username) }}">
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li>No friends yet!</li>
        @endforelse
    </ul>
</div>
