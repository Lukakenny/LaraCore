<x-laraLayouts>
    <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
        <div>
            <h1 class="text-3xl font-bold drop-shadow-md">Sve Objave</h1>
            <p class="text-white/60 text-sm mt-1">Upravljaj svim tekstovima na tvom sajtu</p>
        </div>


    </div>

    <div class="bg-white/10 backdrop-blur-lg border border-white/20 shadow-2xl rounded-2xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full whitespace-nowrap text-left">

                <thead class="bg-white/5 border-b border-white/10 text-white/70 text-sm uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4 font-medium">ID</th>
                    <th class="px-6 py-4 font-medium">Naslov</th>
                    <th class="px-6 py-4 font-medium">Kategorija</th>
                    <th class="px-6 py-4 font-medium text-right">Akcije</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-white/10">

                @foreach($posts as $post)
                    <tr class="hover:bg-white/5 transition-colors duration-200">
                        <td class="px-6 py-4 text-sm text-white/50">{{$post->id}}</td>

                        <td class="px-6 py-4">
                            <p class="font-medium text-white">{{$post->title}}</p>
                            <p class="text-xs text-white/40 mt-1">{{$post->created_at}}</p>
                        </td>

                        <td class="px-6 py-4 text-sm text-white/70">
                            Vesti
                        </td>
                        <td class="px-6 py-4 text-right space-x-3">
                            <a href="{{route('admin.posts.show',['post' => $post->id])}}"
                               class="text-blue-400 hover:text-blue-300 hover:underline text-sm transition">Procitaj</a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                  class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-red-400 hover:text-red-300 hover:underline text-sm transition">
                                    Obriši
                                </button>
                            </form>

                        </td>
                    </tr>

                @endforeach
                <div class="mt-8">
                    {{ $posts->links() }}
                </div>
                </tbody>
            </table>
        </div>
    </div>
</x-laraLayouts>
