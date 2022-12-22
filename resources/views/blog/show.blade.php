<x-landing-layout>
    <section class="container flex flex-col px-6 mx-auto md:px-16 space-y-6">
        <div class="space-y-2">
            <h1 class="text-2xl font-bold">{{ $post->title }}</h1>

            <h3 class="truncate">{!! $post->body !!}</h3>

            <div class="flex justify-between text-sm">
                <p class="font-bold">{{ $post->user->name }}</p>

                <p>{{ $post->created_at->isoFormat('MMMM Do, Y') }}</p>
            </div>
        </div>
    </section>
</x-landing-layout>
