<x-layout>
    <div class="max-w-md mx-auto mt-16 space-y-4">
    <div class="border border-border bg-card p-6 rounded-lg shadow-sm space-y-2">
        <div class="text-lg font-semibold">Name</div>
        <div class="text-muted">{{ $user->name }}</div>

        <div class="text-lg font-semibold mt-4">Email</div>
        <div class="text-muted">{{ $user->email }}</div>
    </div>
</div>
</x-layout>
