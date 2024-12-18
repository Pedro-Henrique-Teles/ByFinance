<div x-data="{ openModal: null, modalTitle: '', modalAction: '', modalColor: '' }" class="relative h-screen">
    <!-- Botões -->
    <div class="absolute top-4 right-4 flex items-center justify-center space-x-1 bg-gray-100 rounded-full p-1 w-max shadow-md">
        <!-- Botão para cima (abre o modal de receitas) -->
        <button @click="openModal = 'modal'; modalTitle = 'Novo Lançamento - Receita'; modalAction = 'Salvar Receita'; modalColor = 'bg-green-600'" class="flex items-center justify-center p-2 rounded-full bg-white hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
        </button>

        <!-- Botão para baixo (abre o modal de despesas) -->
        <button @click="openModal = 'modal'; modalTitle = 'Novo Lançamento - Despesa'; modalAction = 'Salvar Despesa'; modalColor = 'bg-red-600'" class="flex items-center justify-center p-2 rounded-full bg-white hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

    <!-- Modal Genérico -->
    <div x-show="openModal === 'modal'" x-transition class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg w-1/2 relative">
            <!-- Botão de Fechar (X) -->
            <button @click="openModal = null" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <h2 class="text-xl font-semibold text-gray-900" x-text="modalTitle"></h2>

            <form>
                <div class="mt-4">
                    <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                    <input type="text" id="descricao" name="descricao" class="mt-2 p-2 w-full border border-gray-300 rounded-md" />
                </div>

                <div class="mt-4">
                    <label for="valor" class="block text-sm font-medium text-gray-700">Valor</label>
                    <input type="number" id="valor" name="valor" class="mt-2 p-2 w-full border border-gray-300 rounded-md" />
                </div>

                <div class="mt-4 flex justify-between">
                    <button @click="openModal = null" type="button" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Cancelar</button>
                    <button type="submit" :class="modalColor" class="px-4 py-2 text-white rounded-md" x-text="modalAction"></button>
                </div>
            </form>
        </div>
    </div>
</div>
