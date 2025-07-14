<x-layout>
    <div class="max-w-md mx-auto mt-16 space-y-6">
    <form method="POST" action="{{ route('register.post') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium mb-1">Name</label>
            <input type="text" name="name" required class="w-full border border-border bg-background px-3 py-2 rounded-md shadow-sm" />
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" required class="w-full border border-border bg-background px-3 py-2 rounded-md shadow-sm" />
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Password</label>
            <input type="password" name="password" required class="w-full border border-border bg-background px-3 py-2 rounded-md shadow-sm" />
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Confirm Password</label>
            <input type="password" name="password_confirmation" required class="w-full border border-border bg-background px-3 py-2 rounded-md shadow-sm" />
        </div>
        <button type="submit" class="w-full bg-primary text-white px-4 py-2 rounded-md hover:bg-primary/90">Register</button>
    </form>
    <div class="text-sm text-center">
        Already have an account?
        <a href="{{ route('login') }}" class="text-primary hover:underline">Login</a>
    </div>
</div>
</x-layout>
