@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block w-full mt-1
    bg-white/5
    border border-white/20
    rounded-lg
    text-white
    placeholder-white/50
    focus:border-white/40
    focus:ring-white/20
    shadow-md"']) }}>
