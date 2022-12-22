<x-landing-layout>
    <section class="container flex flex-col px-6 mx-auto md:px-16 space-y-6">
        @foreach ($posts as $post)
            <div class="space-y-2">
                <a href="{{ route('blog.show', $post->title) }}" class="text-2xl font-bold">{{ $post->title }}</a>

                <h3 class="truncate">{!! Str::limit($post->body, 50) !!}</h3>

                <div class="flex justify-between text-sm">
                    <p class="font-bold">{{ $post->user->name }}</p>

                    <p>{{ $post->created_at->isoFormat('MMMM Do, Y') }}</p>
                </div>
            </div>

            <hr>
        @endforeach
    </section>
</x-landing-layout>
