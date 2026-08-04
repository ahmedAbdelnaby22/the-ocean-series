<div id="welcomePopup"
     class="fixed inset-0 bg-black/70 flex items-center justify-center z-[9999]">

    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden max-w-5xl w-[95%] relative">

        <button
            onclick="closeWelcome()"
            class="absolute top-4 right-4 bg-red-500 hover:bg-red-600 text-white rounded-full w-10 h-10 text-xl">

            ✕

        </button>

        <img
            src="{{ asset('assets/images/welcome/welcome-teacher.png') }}"
            class="w-full h-auto"
            alt="Welcome">

        <div class="p-6 text-center">

            <h2 class="text-3xl font-bold text-[#083c5c]">

                أهلاً بكم في منصة THE OCEAN SERIES

            </h2>

            <p class="mt-3 text-gray-600">

                يسعدنا انضمامكم إلى رحلتنا التعليمية.

            </p>

            <button

                onclick="closeWelcome()"

                class="mt-6 px-8 py-3 rounded-full bg-[#f6c951] text-[#083c5c] font-bold hover:scale-105 transition">

                ابدأ رحلتك التعليمية

            </button>

        </div>

    </div>

</div>

<script>

function closeWelcome(){

    document.getElementById('welcomePopup').style.display='none';

}

</script>