<x-layout>
    <div class="max-w-2xl mx-auto mt-10 space-y-6">
    <form method="POST" action="{{ route('posts.store') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium mb-1">Title</label>
            <input type="text" name="title" required class="w-full border border-border bg-background px-3 py-2 rounded-md shadow-sm" />
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Content</label>
            <textarea name="content" rows="6" required class="w-full border border-border bg-background px-3 py-2 rounded-md shadow-sm"></textarea>
        </div>
        <button type="submit" class="bg-primary text-white px-4 py-2 rounded-md hover:bg-primary/90">Create Post</button>
    </form>
</div>
</x-layout>
