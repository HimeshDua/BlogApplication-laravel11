<x-layout>
    <div class="max-w-3xl mx-auto mt-10 space-y-6">
    @foreach ($posts as $post)
        <div class="border border-border rounded-xl bg-card p-5 shadow-sm">
            <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
            <p class="text-sm text-muted mt-1">{{ Str::limit($post->content, 100) }}</p>
            <a href="{{ route('posts.show', $post->id) }}" class="inline-block mt-3 text-primary hover:underline">Read More</a>
        </div>
    @endforeach
</div>
</x-layout>
