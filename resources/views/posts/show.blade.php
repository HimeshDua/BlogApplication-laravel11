<x-layout :title="$post->title">
    <div class="max-w-3xl mx-auto mt-10">
        <div class="bg-card border border-border rounded-2xl shadow-sm p-6 space-y-6">
            <div class="space-y-2">
                <h1 class="text-3xl font-bold tracking-tight text-foreground">{{ $post->title }}</h1>
                <p class="text-sm text-muted-foreground">Written by <span
                        class="font-medium">{{ $post->author_name }}</span></p>
            </div>

            <div class="prose prose-sm sm:prose-base max-w-none text-foreground leading-relaxed">
                {!! nl2br(e($post->content)) !!}
            </div>

            <div class="text-right pt-4 text-xs text-muted-foreground">
                Last updated: {{ $post->updated_at->format('F j, Y \a\t g:i A') }}
            </div>
        </div>

        <div class="mt-8 flex justify-end">
            <a href="{{ url()->previous() }}" class="btn btn-outline text-sm">← Back</a>
        </div>
    </div>
</x-layout>
