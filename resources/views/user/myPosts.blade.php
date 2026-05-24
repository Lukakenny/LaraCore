<x-navigation>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 py-8">

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between border-b border-white/10 pb-6 mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-white flex items-center gap-2">
                    <span>📁</span> Moji postovi
                </h1>
                <p class="text-sm text-slate-400 mt-1">Upravljaj svojim objavama, izmeni ih ili obriši.</p>
            </div>
            <div class="bg-red-500/10 border border-red-500/20 px-4 py-2 rounded-xl self-start sm:self-center">
                <span class="text-xs font-semibold text-red-400 uppercase tracking-wider">Ukupno napisano:{{count($posts)}}</span>
            </div>
        </div>

        <div class="space-y-6">

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/[0.07] transition-all duration-300 shadow-xl relative overflow-hidden group">

                @foreach($posts as $post)
                    <div class="flex justify-between items-center mb-3">
                <span class="text-xs text-slate-400 flex items-center gap-1">
                    🕒 {{ $post->created_at->diffForHumans() }}
                </span>
                        <span class="px-3 py-1 rounded-lg bg-red-500/10 text-red-400 text-xs border border-red-500/20 font-medium">
                   {{$post->category->name}}
                </span>
                    </div>

                    <h2 class="text-xl font-bold text-white mb-2 group-hover:text-red-400 transition-colors duration-300">
                       {{$post->title}}
                    </h2>
                    <p class="text-slate-300 text-sm leading-relaxed mb-6 line-clamp-2">
                       {{$post->body}}
                    </p>

                    <div class="flex items-center justify-between border-t border-white/5 pt-4">


                        <div class="flex items-center gap-3">
                            <a href="#" class="flex items-center gap-1.5 bg-amber-500/10 hover:bg-amber-500/20 text-amber-400 border border-amber-500/20 px-4 py-2 rounded-xl text-xs font-semibold transition-all active:scale-95">
                                ✏️ Izmeni
                            </a>

                            <form action="{{ route('user.destroy', $post->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex items-center gap-1.5 bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 border border-rose-500/20 px-4 py-2 rounded-xl text-xs font-semibold transition-all active:scale-95">
                                    🗑️ Obriši
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/[0.07] transition-all duration-300 shadow-xl relative overflow-hidden group">
                <div class="flex justify-between items-center mb-3">
                <span class="text-xs text-slate-400 flex items-center gap-1">
                    🕒 pre 3 dana
                </span>
                    <span class="px-3 py-1 rounded-lg bg-red-500/10 text-red-400 text-xs border border-red-500/20 font-medium">
                    Dizajn
                </span>
                </div>

                <h2 class="text-xl font-bold text-white mb-2 group-hover:text-red-400 transition-colors duration-300">
                    Kako uskladiti tamne modove sa staklenim efektima
                </h2>
                <p class="text-slate-300 text-sm leading-relaxed mb-6 line-clamp-2">
                    Pravljenje glassmorphism dizajna zahteva pažljivo biranje pozadinskih boja. Kada radite sa tamnim nijansama, bele polu-providne ivice daju savršen osećaj dubine...
                </p>

                <div class="flex items-center justify-between border-t border-white/5 pt-4">
                    <a href="#" class="text-xs text-slate-400 hover:text-white transition-colors">
                        Pogledaj objavu &rarr;
                    </a>

                    <div class="flex items-center gap-3">
                        <a href="#" class="flex items-center gap-1.5 bg-amber-500/10 hover:bg-amber-500/20 text-amber-400 border border-amber-500/20 px-4 py-2 rounded-xl text-xs font-semibold transition-all active:scale-95">
                            ✏️ Izmeni
                        </a>
                        <button type="button" class="flex items-center gap-1.5 bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 border border-rose-500/20 px-4 py-2 rounded-xl text-xs font-semibold transition-all active:scale-95">
                            🗑️ Obriši
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-8 flex justify-center border-t border-white/10 pt-6">
            <nav class="inline-flex gap-2 text-sm font-medium">
                <a href="#" class="px-3 py-1.5 bg-white/5 rounded-lg text-slate-400 hover:text-white transition-colors border border-white/10">&larr; Prethodna</a>
                <a href="#" class="px-3 py-1.5 bg-red-500 text-white rounded-lg border border-red-500 shadow-md shadow-red-500/20">1</a>
                <a href="#" class="px-3 py-1.5 bg-white/5 rounded-lg text-slate-300 hover:text-white transition-colors border border-white/10">2</a>
                <a href="#" class="px-3 py-1.5 bg-white/5 rounded-lg text-slate-400 hover:text-white transition-colors border border-white/10">Sledeća &rarr;</a>
            </nav>
        </div>

    </div>
</x-navigation>
