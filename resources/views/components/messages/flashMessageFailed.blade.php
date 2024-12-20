@if (session()->has('error'))
    <body class="dark">
        <div x-data="{ show: true, progress: 0 }"
            x-show="show"
            x-init="setTimeout(() => show = false, 3000); let interval = setInterval(() => { progress += 1; if (progress >= 100) clearInterval(interval) }, 50)"
            x-transition:enter="transition ease-out duration-500 transform"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            id="toast-danger"
            class="flex flex-col items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-md"
            role="alert">

            <!-- Icon Section -->
            <div class="flex items-center w-full">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8  rounded-lg bg-red-800 text-red-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                </div>
                <div class="ml-3 text-sm font-normal">{{ session('error') }}</div>
                <button @click="show = false" type="button"
                    class="ml-auto -mx-1.5 -my-1.5  rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5  inline-flex items-center justify-center h-8 w-8 text-gray-500 hover:text-white bg-gray-800 hover:bg-gray-700"
                    aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>

            <!-- Progress Bar Section -->
            <div class="w-full h-1 mt-3 bg-gray-700 rounded-full">
                <div class="h-full bg-red-500 rounded-full" :style="{ width: `${progress}%` }"></div>
            </div>
        </div>
    </body>
@endif
