<x-layout :section_title="'Create New Post'">
    <div class="max-w-2xl mx-auto mt-10 space-y-6">
        <form method="POST" action="{{ route('posts.store') }}" class="space-y-6">
            @csrf

            <div class="space-y-2">
                <label for="title" class="text-sm font-medium text-foreground">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" required
                    class="w-full px-3 py-2 text-sm border border-border bg-background rounded-md focus:outline-none focus:ring-2 focus:ring-primary/50 shadow-sm transition" />
            </div>

            <div class="space-y-2">
                <label for="content" class="text-sm font-medium text-foreground">Content</label>
                <textarea id="content" name="content" rows="6" required
                    class="w-full px-3 py-2 text-sm border border-border bg-background rounded-md focus:outline-none focus:ring-2 focus:ring-primary/50 shadow-sm transition resize-y">{{ old('content') }}</textarea>
            </div>

            <div class="pt-2 flex flex-col sm:flex-row sm:items-center gap-3">
                <button type="submit" class="btn btn-primary w-full sm:w-auto text-sm">
                    Publish Post
                </button>

                <a href="{{ url()->previous() }}" class="btn btn-outline w-full sm:w-auto text-sm">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</x-layout>
