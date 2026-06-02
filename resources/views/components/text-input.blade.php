@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 rounded-xl shadow-sm transition-all duration-200 w-full py-3 px-4 bg-gray-50/50 hover:bg-white focus:bg-white']) }}>
