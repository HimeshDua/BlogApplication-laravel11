<x-layout :title="'Latest Posts'">
    <div class="mx-auto mt-10 space-y-6">
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

                    <a href="{{ route('posts.show', $post->id) }}"
                        class="mt-3 inline-flex items-center text-sm font-medium text-primary hover:underline">
                        Read More →
                    </a>
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
