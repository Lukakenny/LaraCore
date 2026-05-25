<x-navigation>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

            <div
                class="lg:col-span-1 bg-white/5 backdrop-blur-lg border border-white/10 shadow-2xl rounded-2xl p-6 lg:sticky lg:top-24">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-2xl">✍️</span>
                    <div>
                        <h2 class="text-lg font-bold text-white">Nova objava</h2>
                        <p class="text-xs text-slate-400">Podeli svoje misli sa zajednicom.</p>
                    </div>
                </div>

                <form action="{{route('user.store')}}" method="POST" class="space-y-4">
                    {{csrf_field()}}
                    <div>
                        <label
                            class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1.5">Naslov</label>
                        <input type="text" name="title" placeholder="Unesi upečatljiv naslov..."
                               class="w-full bg-[#121212]/40 border border-white/10 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 outline-none focus:border-red-500/50 focus:bg-[#121212]/80 transition-all text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1.5">Kategorija</label>
                        <div class="relative">
                            <select name="category_id"
                                    class="w-full bg-[#121212]/40 border border-white/10 text-white rounded-xl px-4 py-2.5 outline-none focus:border-red-500/50 focus:bg-[#121212]/80 transition-all text-sm appearance-none cursor-pointer">
                                <option value="" class="text-slate-900">Izaberi kategoriju...</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                            class="text-slate-900">{{$category->name}}</option>
                                @endforeach

                            </select>
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400">
                                ▾
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1.5">Sadržaj</label>
                        <textarea name="body" rows="5" placeholder="Napiši nešto prelepo..."
                                  class="w-full bg-[#121212]/40 border border-white/10 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 outline-none focus:border-red-500/50 focus:bg-[#121212]/80 transition-all text-sm resize-none"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-gradient-to-r from-[#FF2D20] to-red-700 hover:from-red-500 hover:to-red-600 text-white py-3 rounded-xl font-medium text-sm transition-all shadow-lg shadow-red-500/20 active:scale-[0.98]">
                        🚀 Objavi na Feed
                    </button>
                </form>
            </div>

            <div class="lg:col-span-2 space-y-6">

                <div class="flex items-center justify-between border-b border-white/10 pb-4">
                    <h1 class="text-xl font-bold text-white flex items-center gap-2">
                        <span>📰</span> Najnovije objave
                    </h1>
                    <span
                        class="text-xs bg-white/10 text-slate-300 px-2.5 py-1 rounded-full font-medium border border-white/10">
                        Aktivno: {{count($posts)}}
                    </span>
                </div>


                @foreach($posts as $post)
                    <div
                        class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/[0.08] transition-all duration-300 group shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-xl bg-gradient-to-br from-red-400 to-orange-500 flex items-center justify-center text-white font-bold shadow-md">
                                    {{ Str::upper(Str::substr($post->user->name, 0, 1)) }}
                                </div>
                                <h4 class="text-white font-medium text-sm group-hover:text-red-400 transition-colors">
                                    {{$post->user->name}}
                                </h4>
                                <div>
                                    <h4 class="text-white font-medium text-sm group-hover:text-red-400 transition-colors">
                                        {{$post->name}}</h4>
                                    <p class="text-xs text-slate-400">
                                    <p>{{ $post->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <span
                                class="px-3 py-1 rounded-lg bg-red-500/10 text-red-400 text-xs border border-red-500/20 font-medium">
                           {{ $post->category->name}}
                        </span>
                        </div>

                        <h3 class="text-lg sm:text-xl font-bold text-white mb-2 leading-snug">{{$post->title}}</h3>
                        <p class="text-slate-300 text-sm leading-relaxed line-clamp-3 mb-4">
                            {{$post->body}}
                        </p>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-navigation>



