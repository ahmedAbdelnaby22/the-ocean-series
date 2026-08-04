<nav class="navbar fixed top-0 left-0 w-full z-50 bg-white/90 backdrop-blur shadow-md">

    <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between"
         dir="rtl">


        <!-- Logo -->
        <div class="logo">

            <a href="/">
                <img 
                src="{{ asset('assets/images/logo/logo.png') }}" 
                alt="The Ocean Series Logo"
                class="w-32 md:w-40 transition duration-300 hover:scale-110">
            </a>

        </div>


        <!-- Menu -->

        <ul class="hidden md:flex items-center gap-8 font-bold text-[#083c5c]">


            <li>
                <a href="/"
                   class="hover:text-[#f6c951] transition duration-300">
                    الصفحة الرئيسية
                </a>
            </li>


            <li>
                <a href="#about"
                   class="hover:text-[#f6c951] transition duration-300">
                    نبذة عني
                </a>
            </li>


            <li>
                <a href="#dashboard"
                   class="hover:text-[#f6c951] transition duration-300">
                    لوحة التحكم
                </a>
            </li>


            <li>
                <a href="#documents"
                   class="hover:text-[#f6c951] transition duration-300">
                    المستندات والمذكرات
                </a>
            </li>


            <li>
                <a href="#follow"
                   class="hover:text-[#f6c951] transition duration-300">
                    تابع معي
                </a>
            </li>


        </ul>


        <!-- Mobile Button -->

        <button class="md:hidden text-3xl text-[#083c5c]">
            ☰
        </button>


    </div>

</nav>