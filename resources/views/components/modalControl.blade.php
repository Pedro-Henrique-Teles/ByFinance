<div x-data="{ openModal: null }" class="relative h-screen">
    <!-- Botões de Controle -->
    <div class="absolute top-4 right-4 flex items-center justify-center space-x-1 bg-gray-100 rounded-full p-1 w-max shadow-md">
        <!-- Botão Receita -->
        <button @click="openModal = 'modalReceita'" class="flex items-center justify-center p-2 rounded-full bg-white hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
        </button>

        <!-- Botão Despesa -->
        <button @click="openModal = 'modalDespesa'" class="flex items-center justify-center p-2 rounded-full bg-white hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

    <!-- Importar os Modais -->
    <x-modalReceita />
    <x-modalDespesa />
</div>
