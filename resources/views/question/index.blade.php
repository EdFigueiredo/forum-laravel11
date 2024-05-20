<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Perguntas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Assunto</th>
                                <th scope="col" class="px-6 py-3">Conteúdo</th>
                                <th scope="col" class="px-6 py-3">Categoria</th>
                                <th scope="col" class="px-6 py-3">Ações</th>
                            </tr>
                    </thead>
                    <tbody class="text-gray-600 dark:text-white text-sm font-light">
                        @forelse ($questions as $question)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-70">
                                <td class="px-6 py-4">{{ $question->subject }}</td>
                                <td class="px-6 py-4">{{ $question->text }}</td>
                                <td class="px-6 py-4">{{ $question->category->name }}</td>
                                <td class="px-6 py-4 flex justify-center space-x-2">
                                    <a href="{{ route('questions.show', $question->id) }}">
                                        <i class="fa-solid fa-building"></i>
                                    </a>
                                    <a href="{{ route('questions.edit', $question->id) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>    
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>