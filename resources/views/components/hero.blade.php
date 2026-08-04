```html
<section
    class="relative overflow-hidden pt-24"

style="background:linear-gradient(135deg,#083c5c,#0b5d88);">


<div class="max-w-7xl mx-auto px-6 py-20 pt-28">


<div class="grid lg:grid-cols-2 gap-12 items-center">


<!-- Left Content -->

<div class="text-right">


<span
class="inline-block bg-[#f6c951] text-[#083c5c] px-5 py-3 rounded-full font-bold mb-6 shadow-lg">

✨ منصة تعليمية احترافية

</span>



<h1
class="text-5xl lg:text-7xl font-extrabold text-white leading-tight">


مرحبًا بك في


<br>


<span class="text-[#f6c951]">

THE OCEAN SERIES

</span>


</h1>




<p
class="mt-8 text-xl text-gray-200 leading-10">


ابدأ رحلتك نحو التفوق في اللغة الإنجليزية مع مستر عبدالسلام.

منصة تعليمية حديثة تجمع بين الشرح المبسط،
الاختبارات،
المذكرات،
والمتابعة المستمرة.


</p>




<blockquote
class="mt-8 border-r-4 border-[#f6c951] pr-5 italic text-white text-lg">


"نحن لا نعلّم الإنجليزية فقط...
بل نبني الثقة،
ونصنع النجاح."


</blockquote>




<div class="flex gap-5 mt-10 justify-end">


<a href="#groups"

class="bg-[#f6c951]
text-[#083c5c]
px-10
py-4
rounded-full
font-bold
shadow-xl
hover:scale-105
transition">


ابدأ الآن


</a>




<a href="#about"

class="border-2
border-white
text-white
px-10
py-4
rounded-full
hover:bg-white
hover:text-[#083c5c]
transition">


تعرف علينا


</a>



</div>


</div>





<!-- Right Slider -->


<div class="relative">


<div
class="bg-white rounded-3xl p-4 shadow-2xl">


<div class="relative overflow-hidden rounded-3xl">



<img
src="{{ asset('assets/images/slider/teacher-01.jpg') }}"
class="slide w-full h-[550px] object-cover rounded-3xl"
alt="Teacher">



<img
src="{{ asset('assets/images/slider/teacher-02.jpg') }}"
class="slide w-full h-[550px] object-cover rounded-3xl hidden"
alt="Teacher">



<img
src="{{ asset('assets/images/slider/teacher-03.jpg') }}"
class="slide w-full h-[550px] object-cover rounded-3xl hidden"
alt="Teacher">



</div>


</div>


</div>


</div>


</div>


</section>





<script>


let slides = document.querySelectorAll('.slide');


let currentSlide = 0;



setInterval(()=>{


slides[currentSlide].classList.add('hidden');


currentSlide++;



if(currentSlide >= slides.length)

{

currentSlide = 0;

}



slides[currentSlide].classList.remove('hidden');



},4000);



</script>
```
