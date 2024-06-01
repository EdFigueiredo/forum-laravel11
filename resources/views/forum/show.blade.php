<x-forum-layout>
    <div class="grid gap-6 lg:gap-8">
        <div
        class="flex items-start gap-4 rounded-lg bg-white p-6 
		shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] 
		ring-1 ring-white/[0.05] transition duration-300 
		hover:text-black/70 hover:ring-black/20 focus:outline-none 
		focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 
		dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700
		dark:focus-visible:ring-[#FF2D20]">
        <div class="pt-3 sm:pt-5">
            <h2 class="text-xl font-semibold text-black dark:text-white">{{ $question->subject }}</h2>

            <p class="mt-4 text-sm/relaxed">
                {{ $question->text }}
            </p>


            <div class="flex justify-start w-full mt-4 space-x-4">
                <p class="text-sm/relaxed">Autor: {{ $question->user->name }}</p>
                <p class="text-sm/relaxed">Categoria: {{ $question->category->name }}</p>
            </div>
        </div>
    </div>
</x-forum-layout>