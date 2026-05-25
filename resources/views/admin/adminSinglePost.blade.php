<x-laraLayouts>

    <div class="flex items-center justify-between mb-8">
        <a href="{{route('admin.posts.index')}}"
           class="text-white/60 hover:text-white flex items-center gap-2 transition-colors">
            <span>&larr;</span> Nazad na sve objave
        </a>


    </div>

    <div
        class="bg-white/10 backdrop-blur-lg border border-white/20 shadow-2xl rounded-2xl overflow-hidden p-8 sm:p-12 max-w-4xl mx-auto">

        <div class="flex items-center gap-4 mb-6">

            <span class="text-sm text-white/50">Kategorija: <strong
                    class="text-white/80">{{$post->category->name}}</strong></span>
            <span class="text-sm text-white/50">&bull;</span>
            <span class="text-sm text-white/50">{{$post->created_at}}</span>
        </div>

        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-8 leading-tight drop-shadow-md">
            {{$post->title}}
        </h1>

        <hr class="border-white/10 mb-8">

        <div class="text-white/80 text-lg leading-relaxed space-y-6 font-light">

            <p>{{$post->body}}</p>

        </div>

    </div>
</x-laraLayouts>
