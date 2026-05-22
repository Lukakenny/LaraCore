<x-laraLayouts>

    <div class="max-w-6xl mx-auto space-y-10">

        <div class="bg-white/10 backdrop-blur-lg border border-white/20 shadow-2xl rounded-2xl p-6 sm:p-8">
            <h2 class="text-2xl font-bold text-white mb-2">Upravljanje Kategorijama</h2>
            <p class="text-white/60 text-sm mb-6">Dodaj novu kategoriju za svoje objave.</p>

            <form action="{{route('admin.categories.store')}}" method="POST" class="flex flex-col sm:flex-row gap-4">
                {{csrf_field()}}
                <input type="text" name="name" placeholder="Upiši ime kategorije (npr. Vesti)..."
                       class="flex-1 bg-white/5 border border-white/10 text-white placeholder-white/30 rounded-xl px-5 py-3 outline-none focus:border-white/30 focus:bg-white/10 transition-all duration-300">

                <button type="submit" class="bg-[#FF2D20] hover:bg-red-600 text-white px-8 py-3 rounded-xl font-medium transition-all duration-300 shadow-lg shadow-red-500/30 whitespace-nowrap">
                    + Dodaj Kategoriju
                </button>
            </form>
        </div>

        <div>
            <h3 class="text-lg font-medium text-white/80 mb-4 flex items-center gap-2">
                <span>📂</span> Izaberi kategoriju za pregled objava:
            </h3>


            <div class="flex flex-wrap gap-3">
                <a href="{{ route('admin.categories.index') }}"
                   class="px-5 py-2 rounded-xl text-sm transition-all duration-200 border
       {{ !request('filter') ? 'bg-white/20 border-white/40 text-white font-semibold shadow-inner' : 'bg-white/5 border-white/10 text-white/70 hover:bg-white/10 hover:text-white' }}">
                    Sve objave
                </a>


                  @foreach($categories as $category)
                    <a href="{{route('admin.categories.index', ['filter' => $category->slug])}}" class="px-5 py-2 rounded-xl text-sm transition-all duration-200 border bg-white/5 border-white/10 text-white/70 hover:bg-white/10 hover:text-white">
                        {{ $category->name}}
                    </a>

                  @endforeach


            </div>
        </div>

        <hr class="border-white/10">

        <div>
            <div class="flex justify-between items-end mb-6">
                <span class="text-white/50 text-sm">Pronađeno: {{count($posts)}} postova</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    @forelse($posts as $post)
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:bg-white/10 transition-colors duration-300 flex flex-col h-full">
                        <div class="flex-1">
                            <span class="text-xs text-white/40 mb-2 block">{{$post->created_at}}</span>
                            <h3 class="text-lg font-bold text-white mb-2 leading-tight">{{$post->title}}</h3>
                            <p class="text-sm text-white/60 line-clamp-3">{{$post->body}}</p>
                        </div>

                        @empty
                            <div class="col-span-full text-center py-10">
                                <p class="text-white/50 text-lg">Trenutno nema objava u ovoj kategoriji.</p>
                            </div>

                    @endforelse


            </div>
        </div>
        </div>
    </div>
</x-laraLayouts>
