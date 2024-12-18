<div x-show="openModal === 'modalDespesa'" x-transition class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50">
    <div class="bg-white p-6 rounded-lg w-1/2 relative">
        <button @click="openModal = null" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <h2 class="text-xl font-semibold text-gray-900">Novo Lançamento - Despesa</h2>

        <form>
            <div class="mt-4">
                <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                <input type="text" id="descricao" name="descricao" class="mt-2 p-2 w-full border border-gray-300 rounded-md" />
            </div>

            <div class="mt-4">
                <label for="valor" class="block text-sm font-medium text-gray-700">Valor</label>
                <input type="text" id="valor" name="valor" class="mt-2 p-2 w-full border border-gray-300 rounded-md"
                       onkeydown="return event.keyCode === 8 || event.keyCode === 9 || event.keyCode === 46 || /^[0-9.,]$/.test(event.key)" />
            </div>

            <div class="mt-4 flex justify-between">
                <button @click="openModal = null" type="button" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Cancelar</button>
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md">Salvar Despesa</button>
            </div>
        </form>
    </div>
</div>
