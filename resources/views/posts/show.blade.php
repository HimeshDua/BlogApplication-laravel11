<x-layout>
    <div class="max-w-3xl mx-auto mt-10 space-y-4">
    <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
    <div class="text-sm text-muted">By {{ $post->author_name }}</div>
    <div class="mt-4 text-base leading-relaxed">{{ $post->content }}</div>
</div>
</x-layout>
