@props(['bandeiras', 'modalId', 'buttonText'])

<div>
    <!-- Botão para abrir o modal -->
    <button onclick="toggleModal('{{ $modalId }}')" 
      class="flex items-center justify-center w-10 h-10 text-blue-600 bg-white border border-blue-600 rounded-full focus:ring-opacity-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
      </svg>
    </button>
  
    <!-- Modal -->
    <div id="{{ $modalId }}" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
      <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
        <form action="{{ route('conta.store') }}" method="POST" class="p-6">
          @csrf
          <!-- Modal Header -->
          <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Cadastrar Conta</h3>
            <button type="button" class="text-gray-500 hover:text-gray-700" onclick="toggleModal('{{ $modalId }}')">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
  
          <!-- Nome -->
          <div class="mb-4">
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome da Conta</label>
            <input type="text" placeholder="Nome Conta" id="nome" name="nome" maxlength="15" required
              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
  
          <!-- Banco -->
          <div class="mb-4 flex items-center">
            <div class="w-3/4">
              <label for="banco" class="block text-sm font-medium text-gray-700">Banco</label>
              <select id="banco" name="banco" required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="" disabled>Selecione o banco</option>
                @foreach($bandeiras as $bandeira)
                  <option value="{{ $bandeira->id }}" data-image="{{ asset($bandeira->imagem) }}" {{ $bandeira->nome == 'Visa' ? 'selected' : '' }}>
                    {{ $bandeira->nome }}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="w-1/4 ml-4">
              <img id="imagemBanco" src="{{ asset('images/visa.png') }}" alt="Imagem do Banco" class="w-16 h-16 object-contain border border-gray-300 rounded-md shadow-sm">
            </div>
          </div>
  
          <!-- Saldo Inicial -->
          <div class="mb-4">
            <label for="saldoInicial" class="block text-sm font-medium text-gray-700">Saldo Inicial</label>
            <input type="number" placeholder="R$ 0,00" id="saldoInicial" name="saldoInicial" step="0.01" required
              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
  
          <!-- Modal Footer -->
          <div class="flex justify-center space-x-4 mt-4">
            <button type="button" onclick="toggleModal('{{ $modalId }}')"
              class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300">
              Cancelar
            </button>
            <button type="submit"
              class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
              Salvar Conta
            </button>
          </div>
        </form>
      </div>
    </div>
  
    <!-- Script para controlar o modal -->
    <script>
      function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.toggle('hidden');
      }

      document.getElementById('banco').addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const imageUrl = selectedOption.getAttribute('data-image');
        document.getElementById('imagemBanco').src = imageUrl;
      });
    </script>
  </div>