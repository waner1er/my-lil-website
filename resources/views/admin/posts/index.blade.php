<x-app-layout>
    <x-slot name="title">
        {{ __('mylilwebsite.user_posts') }}
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('mylilwebsite.user_posts') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-12">
        <div class="grid grid-cols-minmax">
            @foreach ($posts as $post)
                <div class="rounded overflow-hidden shadow-lg my-2">
                    <div class="font-bold text-xl mb-2 text-center min-h-16 flex items-center justify-center">{{ $post->title }}</div>

                    <img class="w-full" src="{{ $post->image }}" alt="{{ $post->title }}">
                    <div class="px-6 py-4">
                        <p class="text-gray-700 text-base">
                            {{ $post->content }}
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                            {{ $post->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>                
            @endforeach           
        </div>
    </div>
</x-app-layout>
