<div class="relative flex items-center gap-x-6 overflow-hidden bg-gray-100 px-6 py-2.5 sm:px-3.5 shadow-[0_2px_10px_rgba(0,0,0,0.1)]">
    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
        <p class="text-sm text-gray-900">
            <strong class="font-semibold">Visão Geral</strong>
        </p>
    </div>
    <div class="flex flex-1 justify-end">
        <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]" onclick="toggleFullscreen()">
            <span class="sr-only">Fullscreen</span>
            <!-- Ícone de expandir usando Font Awesome -->
            <i class="h-5 w-5 text-gray-900 fa-solid fa-expand"></i>
        </button>
    </div>
</div>

<script>
    function toggleFullscreen() {
        const elem = document.documentElement;

        // Verifica se a página já está em fullscreen
        if (!document.fullscreenElement) {
            // Se não, entra em fullscreen
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) { // Firefox
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) { // Chrome, Safari e Opera
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { // IE/Edge
                elem.msRequestFullscreen();
            }
        } else {
            // Se já estiver em fullscreen, sai do fullscreen
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) { // Firefox
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) { // Chrome, Safari e Opera
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) { // IE/Edge
                document.msExitFullscreen();
            }
        }
    }
</script>
