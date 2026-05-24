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
                            <a href="{{route('user.edit',$post->id)}}" class="flex items-center gap-1.5 bg-amber-500/10 hover:bg-amber-500/20 text-amber-400 border border-amber-500/20 px-4 py-2 rounded-xl text-xs font-semibold transition-all active:scale-95">
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


        </div>

        <div class="mt-8 flex justify-center border-t border-white/10 pt-6">
                {{ $posts->links() }}
        </div>

    </div>
</x-navigation>
