<x-navigation>
    <div class="max-w-2xl mx-auto px-4 sm:px-6 py-8">

        <div class="mb-6">
            <a href="{{ route('user.myPosts') }}" class="inline-flex items-center gap-2 text-sm text-slate-400 hover:text-white transition-colors group">
                <span class="group-hover:-translate-x-1 transition-transform">&larr;</span> Nazad na moje postove
            </a>
        </div>

        <div class="border-b border-white/10 pb-4 mb-8">
            <h1 class="text-2xl font-bold text-white flex items-center gap-2">
                <span>✏️</span> Izmeni objavu
            </h1>
            <p class="text-sm text-slate-400 mt-1">Unesi izmene u polja ispod. Sva polja su obavezna.</p>
        </div>

        <form action="#" method="POST" class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-slate-300 mb-2">
                    Naslov objave
                </label>
                <input type="text"
                       id="title"
                       name="title"
                       value="{{$post->title}}"
                       class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition-all text-sm"
                       required>
            </div>

            <div>
                <label for="category_id" class="block text-sm font-medium text-slate-300 mb-2">
                    Kategorija
                </label>
                <div class="relative">
                    <select id="category_id"
                            name="category_id"
                            class="w-full bg-[#161616] border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition-all text-sm appearance-none cursor-pointer">
                        @foreach($categories as $category)
                            <option value="1" selected class="text-slate-900">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div>
                <label for="body" class="block text-sm font-medium text-slate-300 mb-2">
                    Sadržaj objave
                </label>
                <textarea id="body"
                          name="body"
                          rows="8"
                          class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition-all text-sm resize-none leading-relaxed"
                          required>{{$post->body}}</textarea>
            </div>

            <div class="flex items-center justify-end gap-4 border-t border-white/5 pt-6 mt-8">
                <a href="{{ route('user.myPosts') }}"
                   class="px-5 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-white hover:bg-white/5 border border-transparent transition-all">
                    Odustani
                </a>

                <button type="submit"
                        class="bg-gradient-to-r from-[#FF2D20] to-red-700 hover:from-red-500 hover:to-red-600 text-white px-6 py-2.5 rounded-xl font-semibold text-sm transition-all shadow-lg shadow-red-500/20 active:scale-95">
                    💾 Sačuvaj izmene
                </button>
            </div>
        </form>

    </div>
</x-navigation>

