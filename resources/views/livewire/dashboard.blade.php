<div class="w-full bg-white shadow-md">
    <style>
        .hover-glow:hover {
            text-shadow: 0 0 10px rgba(30, 58, 138, 0.6), 0 0 20px rgba(30, 58, 138, 0.5);
        }

      
        #dropdownMenu {
            transition: opacity 0.2s ease, transform 0.2s ease; 
            opacity: 0; 
            visibility: hidden; 
            transform: translateY(10px); 
        }
        
        #dropdownMenu.show {
            opacity: 1; 
            visibility: visible; 
            transform: translateY(0); 
        }
    </style>

    <div class="max-w-screen-lg mx-auto flex items-center justify-between px-5 py-4">
        <img src="{{ URL('img/logos.png') }}" alt="" class="h-18 w-44 relative right-2/4 ml-12"> 

        <div class="flex flex-row items-center space-x-6 ml-50 relative left-96 font-semibold">
            <a href="#" class="relative rounded-lg text-base text-slate-600 hover:text-blue-700 hover:shadow-lg hover:shadow-blue-300 transition duration-300 inline-block px-4 py-2">Home</a>
            <a href="#" class="relative rounded-lg text-base text-slate-600 hover:text-blue-700 hover:shadow-lg hover:shadow-blue-300 transition duration-300 inline-block px-4 py-2">E-Learning</a>
            <a href="#" class="relative rounded-lg text-base text-slate-600 hover:text-blue-700 hover:shadow-lg hover:shadow-blue-300 transition duration-300 inline-block px-2 py-2">Mitra & portofolio</a>
            <a href="#" class="relative rounded-lg text-base text-slate-600 hover:text-blue-700 hover:shadow-lg hover:shadow-blue-300 transition duration-300 inline-block px-4 py-2">Pencapaian</a>

            <div class="relative inline-block text-left group">
                <div>
                    <button type="button" id="dropdownButton" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-50" aria-haspopup="true">
                        Lainnya
                        <svg id="arrowDown" class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                        <svg id="arrowUp" class="-mr-1 h-5 w-5 text-gray-400 hidden" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M14.78 11.78a.75.75 0 0 1-1.06 0L10 7.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div id="dropdownMenu" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <div class="py-1" role="none">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">Tentang Kami</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">Daftar Trainer</a>
                    </div>
                </div>
            </div>

            <a href="login" class="hidden lg:inline-block bg-blue-700 text-white text-base font-semibold px-4 py-2 rounded-lg transition duration-300 transform hover:bg-blue-600 hover:shadow-lg hover:shadow-blue-300 hover:scale-100">Login</a>
        </div>
    </div>

<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const arrowDown = document.getElementById('arrowDown');
    const arrowUp = document.getElementById('arrowUp');

    let dropdownTimeout;
    let dropdownOpen = false;

    dropdownButton.addEventListener('mouseenter', function() {
        clearTimeout(dropdownTimeout);
        dropdownTimeout = setTimeout(() => {
            dropdownMenu.classList.add('show');
            arrowDown.classList.add('hidden');
            arrowUp.classList.remove('hidden');
            dropdownOpen = true; 
        }, 200);
    });

    dropdownMenu.addEventListener('mouseleave', function() {
       
    });

    dropdownButton.addEventListener('mouseleave', function() {
        clearTimeout(dropdownTimeout);
        dropdownTimeout = setTimeout(() => {
            if (dropdownOpen) { 
                document.addEventListener('click', documentClickListener); 
            }
        }, 200);
    });

    function documentClickListener(event) {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show');
            arrowDown.classList.remove('hidden');
            arrowUp.classList.add('hidden');
            dropdownOpen = false; 
            document.removeEventListener('click', documentClickListener); 
        }
    }
</script>

</div>
