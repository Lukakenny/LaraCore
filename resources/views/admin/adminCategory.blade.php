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

                  @foreach($categories as $category)
                    <a href="#" class="px-5 py-2 rounded-xl text-sm transition-all duration-200 border bg-white/5 border-white/10 text-white/70 hover:bg-white/10 hover:text-white">
                        {{ $category->name}}
                    </a>

                  @endforeach


            </div>
        </div>

        <hr class="border-white/10">

        <div>
            <div class="flex justify-between items-end mb-6">
                <h2 class="text-xl font-bold text-white">
                    Objave u kategoriji: <span class="text-[#FF2D20]">Tutorijali</span>
                </h2>
                <span class="text-white/50 text-sm">Pronađeno: 2 objave</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:bg-white/10 transition-colors duration-300 flex flex-col h-full">
                    <div class="flex-1">
                        <span class="text-xs text-white/40 mb-2 block">20. Maj 2026.</span>
                        <h3 class="text-lg font-bold text-white mb-2 leading-tight">Kako napraviti stakleni dizajn u Tailwindu</h3>
                        <p class="text-sm text-white/60 line-clamp-3">Ovo je kratak opis posta koji će se prikazati na kartici. Glassmorphism je postao veoma popularan u svetu web dizajna...</p>
                    </div>

                    <div class="mt-6 flex justify-between items-center border-t border-white/10 pt-4">
                        <span class="px-2 py-1 rounded bg-green-500/20 text-green-400 text-xs border border-green-500/20">Objavljeno</span>
                        <a href="#" class="text-sm text-blue-400 hover:text-blue-300">Izmeni &rarr;</a>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:bg-white/10 transition-colors duration-300 flex flex-col h-full">
                    <div class="flex-1">
                        <span class="text-xs text-white/40 mb-2 block">18. Maj 2026.</span>
                        <h3 class="text-lg font-bold text-white mb-2 leading-tight">Uvod u Laravel Relacije</h3>
                        <p class="text-sm text-white/60 line-clamp-3">Učenje relacija je ključno za svaku aplikaciju. Povezivanje tabela nikada nije bilo lakše uz Eloquent...</p>
                    </div>

                    <div class="mt-6 flex justify-between items-center border-t border-white/10 pt-4">
                        <span class="px-2 py-1 rounded bg-yellow-500/20 text-yellow-400 text-xs border border-yellow-500/20">Draft</span>
                        <a href="#" class="text-sm text-blue-400 hover:text-blue-300">Izmeni &rarr;</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</x-laraLayouts>
