<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {!! $post->body !!}

                    <div class="space-y-2 mt-5">
                        <x-badge :status="$post->status" class="uppercase text-xs font-bold text-gray-100">
                            {{ $post->status }}
                        </x-badge>

                        <p>
                            {{ $post->created_at->diffForHumans() }}
                        </p>

                        <p> 
                            Published by: <span class="font-bold">{{ $post->user->name }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
