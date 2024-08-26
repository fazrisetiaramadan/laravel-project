@props(['post', 'full' => false])

<div class="card mb-4 p-6 rounded-lg shadow-md bg-white">
    <div class="flex gap-6">
        {{-- Cover photo --}}
        <div class="w-1/3 h-auto rounded-md overflow-hidden flex-shrink-0">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="" class="card-img">
            @else
                <img class="card-img rounded-md" src="{{ asset('storage/posts_images/default.jpeg') }}" alt="">
            @endif
        </div>

        <div class="w-2/3">
            {{-- Title --}}
            <h2 class="font-bold text-xl">{{ $post->title }}</h2>

            {{-- Author and Date --}}
            <div class="text-xs font-light mb-4">
                <span>Posted {{ $post->created_at->diffForHumans() }} by </span>
                <a href="{{ route('posts.user', $post->user) }}"
                    class="text-blue-500 font-medium">{{ $post->user->username }}</a>
            </div>

            {{-- Body --}}
            @if ($full)
                {{-- Show full body text in single post page --}}
                <div class="text-sm">
                    <span>{{ $post->body }}</span>
                </div>
            @else
                {{-- Show limited body text in single post page --}}
                <div class="text-sm">
                    <span>{{ Str::words($post->body, 15) }}</span>
                    <a href="{{ route('posts.show', $post) }}" class="text-blue-500 ml-2">Read more &rarr;</a>
                </div>
            @endif
        </div>
    </div>

    {{-- Placeholder for extra elements used in user dashboard --}}
    <div>
        {{ $slot }}
    </div>
</div>
