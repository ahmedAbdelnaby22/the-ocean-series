<style>
.ocean-popup-overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.75);
    display:flex;
    align-items:center;
    justify-content:center;
    z-index:9999;
    padding:20px;
}

.ocean-popup-card{
    max-width:900px;
    width:100%;
    background:#05070c;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 30px 80px rgba(0,0,0,.7);
    border:1px solid rgba(212,175,55,.3);
}

.ocean-popup-stage{
    position:relative;
}

.ocean-popup-stage img{
    width:100%;
    display:block;
}


/* زر الاغلاق */
.ocean-close{
    position:absolute;
    top:15px;
    left:15px;
    z-index:20;
    width:38px;
    height:38px;
    border-radius:50%;
    border:none;
    background:#c0392b;
    color:white;
    cursor:pointer;
}


/* الفم */

.ocean-mouth-filler{
    position:absolute;
    left:64.91%;
    top:20.64%;
    width:2.85%;
    height:1.66%;
    opacity:0;
}

.ocean-mouth-filler img{
    width:100%;
    height:100%;
}


.ocean-mouth-filler.visible{
    opacity:1;
}


.ocean-lip{
    position:absolute;
    left:64.32%;
    width:4.03%;
}


.ocean-lip img{
    width:100%;
}


.ocean-upper{
    top:20.05%;
    height:2.25%;
    transform-origin:center bottom;
}


.ocean-lower{
    top:20.64%;
    height:2.85%;
    transform-origin:center top;
}


/* الرسالة */

.ocean-message{
    padding:25px;
    text-align:center;
    color:#eee;
    font-family:Tajawal,sans-serif;
}


.ocean-message h2{
    color:#d4af37;
    font-size:28px;
}


#oceanText{
    margin-top:15px;
    font-size:20px;
    line-height:2;
}


.ocean-signature{
    margin-top:20px;
    color:#d4af37;
    font-size:25px;
    opacity:0;
    transition:.5s;
}


.ocean-signature.show{
    opacity:1;
}


.ocean-start{
    margin-top:20px;
    padding:14px 40px;
    border-radius:50px;
    border:none;
    background:#d4af37;
    cursor:pointer;
    font-weight:bold;
}


</style>



<div id="oceanPopup" class="ocean-popup-overlay">

<div class="ocean-popup-card">


<button class="ocean-close" onclick="closeOceanPopup()">✕</button>


<div class="ocean-popup-stage">


<img src="{{ asset('assets/images/welcome/hero-character.png') }}">



<div class="ocean-mouth-filler" id="mouthFiller">

<img src="{{ asset('assets/images/welcome/mouth-filler.png') }}">

</div>


<div class="ocean-lip ocean-upper" id="upperLip">

<img src="{{ asset('assets/images/welcome/mouth-upper.png') }}">

</div>


<div class="ocean-lip ocean-lower" id="lowerLip">

<img src="{{ asset('assets/images/welcome/mouth-lower.png') }}">

</div>


</div>




<div class="ocean-message">

<h2>
THE OCEAN SERIES
</h2>


<div id="oceanText"></div>


<div id="signature" class="ocean-signature">
Mr. Abdel Salam Radwan
</div>


<button class="ocean-start" onclick="closeOceanPopup()">
ابدأ رحلتك التعليمية
</button>


</div>


</div>

</div>





<script>

function closeOceanPopup(){

document.getElementById('oceanPopup').style.display='none';

}



(function(){


const message=
"مرحبًا بكم في منصة THE OCEAN SERIES، سعيد باختياري لأكون شريك نجاح وتفوق وتقدم في اللغة الإنجليزية.";


const text=document.getElementById("oceanText");

const upper=document.getElementById("upperLip");

const lower=document.getElementById("lowerLip");

const filler=document.getElementById("mouthFiller");

const signature=document.getElementById("signature");


let open=0;
let target=0;
let speaking=false;
let frame;



function animateMouth(){


open += (target-open)*0.3;


upper.style.transform=
`translateY(${-open*14}%) scaleY(${1-open*.05})`;


lower.style.transform=
`translateY(${open*30}%) scaleY(${1+open*.08})`;


filler.classList.toggle(
"visible",
open>.05
);



if(speaking || open>.01){

frame=requestAnimationFrame(animateMouth);

}

}




function mouthValue(ch){


if("اويع".includes(ch))
return .8;


if("مبف".includes(ch))
return .1;


return .4;


}



function start(){


text.innerHTML="";

signature.classList.remove("show");

speaking=true;


animateMouth();


let i=0;


function type(){


if(i>=message.length){

speaking=false;

target=0;

signature.classList.add("show");

return;

}



let c=message[i];

text.innerHTML+=c;


target=mouthValue(c);


i++;


setTimeout(type,45);

}


type();

}



window.onload=function(){

setTimeout(start,700);

}



})();


</script>