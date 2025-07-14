<x-layout :title="'Welcome to Movie Box'" :section_title="'Welcome 🎬'">
    <div class="text-center max-w-2xl mx-auto space-y-6">
        <h2 class="text-4xl font-bold tracking-tight text-primary">Discover Movies & Shows</h2>
        <p class="text-muted-foreground text-base leading-relaxed">
            Movie Box is your all-in-one platform to explore the latest films, TV shows, and more. Create an account to
            unlock full features including personalized dashboards, profile views, and post interactions.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('register') }}" class="btn btn-primary text-sm px-6 py-2">Get Started</a>
            <a href="{{ route('login') }}" class="btn btn-outline text-sm px-6 py-2">Log In</a>
        </div>
    </div>

    <div class="mt-12 grid sm:grid-cols-3 gap-6 max-w-5xl mx-auto">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-foreground">🎬 Explore Posts</h3>
            <p class="text-muted-foreground mt-2 text-sm">Read thoughts, opinions, and summaries from our community of
                film lovers.</p>
        </div>

        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-foreground">👥 User & Admin Roles</h3>
            <p class="text-muted-foreground mt-2 text-sm">Users can view and explore posts. Admins can create, edit, and
                manage posts efficiently.</p>
        </div>

        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-foreground">🔐 Secure & Simple Auth</h3>
            <p class="text-muted-foreground mt-2 text-sm">Register quickly and start exploring — no bloat, just clean
                Laravel authentication.</p>
        </div>
    </div>
</x-layout>
