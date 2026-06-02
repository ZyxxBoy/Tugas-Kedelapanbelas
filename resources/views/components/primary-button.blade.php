<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center px-6 py-3 w-full bg-gradient-to-r from-indigo-600 to-purple-600 border border-transparent rounded-xl font-bold text-sm text-white uppercase tracking-widest hover:from-indigo-700 hover:to-purple-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition-all duration-300 transform hover:-translate-y-0.5']) }}>
    {{ $slot }}
</button>
