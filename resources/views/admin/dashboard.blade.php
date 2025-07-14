<x-layout>
    <div class="max-w-5xl mx-auto mt-10 space-y-6">
    <div class="flex justify-end">
        <a href="{{ route('posts.create') }}" class="bg-primary text-white px-4 py-2 rounded-md hover:bg-primary/90">Add New Post</a>
    </div>

    @foreach ($posts as $post)
        <div class="border border-border bg-card p-5 rounded-xl shadow-sm flex justify-between items-start">
            <div>
                <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                <p class="text-sm text-muted mt-1">By {{ $post->author_name }}</p>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('posts.edit', $post->id) }}" class="text-sm bg-muted px-3 py-1 rounded-md hover:bg-muted/70">Edit</a>
                <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                    @csrf @method('DELETE')
                    <button type="submit" class="text-sm bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
</x-layout>
