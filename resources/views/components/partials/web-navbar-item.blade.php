@props([
    'href' => '#',
    'text' => 'Texte',
    'active' => false
])

<a href="{{ $href }}" class="relative group inline-block py-1 bg-white text-lg lg:text-sm text-gray-800 font-medium">
    {{ $text }}
    <span class="absolute left-0 right-0 bottom-0 h-0.5 bg-[#1F3082]
                {{ $active ? 'scale-x-100' : 'scale-x-0' }} origin-left transition-[transform] duration-300 ease-in-out group-hover:scale-x-100 will-change-transform"></span>
</a>