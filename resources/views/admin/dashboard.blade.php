<x-layout :title="'Admin Dashboard'">
    <div class="mx-auto mt-10 space-y-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-foreground">Manage Posts</h2>
            <a href="{{ route('posts.create') }}" class="btn btn-primary text-sm">
                + New Post
            </a>
        </div>

        @forelse ($posts as $post)
            <div class="group border border-border bg-card p-6 rounded-2xl shadow-sm transition hover:shadow-md">
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl font-semibold text-foreground group-hover:text-primary transition-colors">
                        {{ $post->title }}
                    </h2>

                    <p class="text-sm text-muted-foreground">
                        By <span class="font-medium text-foreground">{{ $post->author_name }}</span>
                        · {{ $post->created_at->diffForHumans() }}
                    </p>

                    <p class="text-base text-muted mt-2">
                        {{ Str::limit($post->content, 140) }}
                    </p>

                    <div class="flex gap-3 mt-4">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline text-sm">
                            Edit
                        </a>

                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-destructive text-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center text-muted-foreground py-12">
                No posts available.
            </div>
        @endforelse

        @if ($posts->hasPages())
            <div class="pt-6">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</x-layout>
