@extends('layouts.app')
@section('content')
@section('body_color', '#f3f5fa;')


<style>
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}

.galeria{
    font-family: 'open sans';
}

.galeria h1{
    text-align: center;
    margin:20px 0 15px 0;
    font-weight: 300;
}

.linea{
    border-top: 5px solid #0077C0;
    margin-bottom: 40px;
}

.contenedor-imagenes{
    display:flex;
    width: 85%;
    margin: auto;
    justify-content: space-around;
    flex-wrap: wrap;
    border-radius:3px;
}

.contenedor-imagenes .imagen{
    width: 32%;
    position: relative;
    height:250px;
    margin-bottom:5px;
    box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, .75);
    border-radius:10px;
}
.imagen img{
    width: 100%;
    height:100%;
    object-fit: cover;
    border-radius:10px;
}

.overlay{
    position: absolute;
    bottom: 0;
    left: 0;
    background:rgba(238,51,100,.9);
    width: 100%;
    height: 0;
    overflow: hidden;
    transition: .5s ease;
    border-radius:10px;
}

.overlay h2{
    color: #fff;
    font-weight: 300;
    font-size:30px;
    position: absolute;
    top: 50%;
    left:50%;
    text-align: center;
    transform: translate(-50%, -50%);
}

.imagen:hover .overlay{
    height:100%;
    cursor: pointer;

}

@media screen and (max-width:1000px){
    .contenedor-imagenes{
        width: 95%;
    }
}

@media screen and (max-width:700px){
    .contenedor-imagenes{
        width: 90%;
    }
    .contenedor-imagenes .imagen{
        width: 48%;
    }
}

@media screen and (max-width:450px){
    h1{
        font-size:22px;
    }
    .contenedor-imagenes{
        width: 98%;
    }
    .contenedor-imagenes .imagen{
        width: 80%;
    }
}

</style>



<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
		
							<h1 style="color:white;">
                            Galería fotográfica
							</h1>
		
			</div>

		</div>
		
	</section>

	<!--Content-->
	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9">
	
				</div>
			</div>

		<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<div class="container">
			<article class="vlt-single-post">
				

		

        <body>
    <div class="galeria">
        <div class="linea"></div>
        <div class="contenedor-imagenes">

            <!-- <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/lleras/9.jpg')}}" alt="">
              
                <div class="overlay">
                <a href="{{ route('user.transparency.galeria.galery12') }}"><h2>Lleras</h2></a>
                    
                </div>
            </div> -->

            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/AMVA/1.jpg')}}" alt="">
              
                <div class="overlay">
                <a href="{{ route('user.transparency.galeria.galery11') }}"><h2>Muro verde AMVA</h2></a>
                    
                </div>
            </div>

            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/carcel/1.jpg')}}" alt="">
              
                <div class="overlay">
                <a href="{{ route('user.transparency.galeria.galery3') }}"><h2>Cárcel Metropolitana para Sindicados</h2></a>
                    
                </div>
            </div>


            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/nutibara/Nutibara_Portela.jpg')}}" alt="">
              
                <div class="overlay">
                <a  href="{{ route('user.transparency.galeria.galery4') }}"><h2>Hotel Nutibara</h2></a>
                    
                </div>
            </div>
        
            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/10.jpg')}}" alt="">
              
                <div class="overlay">
                <a  href="{{ route('user.transparency.galeria.galery2') }}"><h2>La Alhambra</h2></a>
                    
                </div>
            </div>
            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/aeep/6.jpg')}}" alt="">
              
                <div class="overlay">
                <a  href="{{ route('user.transparency.galeria.galery10') }}"><h2>AEEP Provenza</h2></a>
                    
                </div>
            </div>
            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/muro_verde/1.jpg')}}" alt="">
              
                <div class="overlay">
                <a  href="{{ route('user.transparency.galeria.galery9') }}"><h2>Muro verde</h2></a>
                    
                </div>
            </div>
            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/cam/1.jpg')}}" alt="">
              
                <div class="overlay">
                <a  href="{{ route('user.transparency.galeria.galery8') }}"><h2>Centro Administrativo Municipal</h2></a>
                    
                </div>
            </div>
            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/punto_cero/1.jpg')}}" alt="">
              
                <div class="overlay">
                <a  href="{{ route('user.transparency.galeria.galery7') }}"><h2>Punto Cero</h2></a>
                    
                </div>
            </div>
            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/olano/1.jpg')}}" alt="">
              
                <div class="overlay">
                <a  href="{{ route('user.transparency.galeria.galery6') }}"><h2>Parque Olano</h2></a>
                    
                </div>
            </div>
            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/naviera/1.jpg')}}" alt="">
              
                <div class="overlay">
                <a  href="{{ route('user.transparency.galeria.galery5') }}"><h2>La Naviera</h2></a>
                    
                </div>
            </div>
         
            <div class="imagen">
              
              <img src="{{ asset('assets/img/Galeria/p2.jpg')}}" alt="">
              
                <div class="overlay">
                <a  href="{{ route('user.transparency.galeria.galery1') }}"><h2>Rendición de cuentas 2021</h2></a>
                    
                </div>
            </div>
        
            
        </div>
        <div class="vlt-gap-30"></div>
        <div class="linea"></div>
    </div>
    
</body>

					
				</section>
			
			</article>

		</div>

	</div>



    </div>

	</section>
	

<script>
	//getting all required elements
const gallery  = document.querySelectorAll(".image"),
previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
closeIcon = previewBox.querySelector(".icon"),
currentImg = previewBox.querySelector(".current-img"),
totalImg = previewBox.querySelector(".total-img"),
shadow = document.querySelector(".shadow");

window.onload = ()=>{
    for (let i = 0; i < gallery.length; i++) {
        totalImg.textContent = gallery.length; //passing total img length to totalImg variable
        let newIndex = i; //passing i value to newIndex variable
        let clickedImgIndex; //creating new variable
        
        gallery[i].onclick = () =>{
            clickedImgIndex = i; //passing cliked image index to created variable (clickedImgIndex)
            function preview(){
                currentImg.textContent = newIndex + 1; //passing current img index to currentImg varible with adding +1
                let imageURL = gallery[newIndex].querySelector("img").src; //getting user clicked img url
                previewImg.src = imageURL; //passing user clicked img url in previewImg src
            }
            preview(); //calling above function
    
            const prevBtn = document.querySelector(".prev");
            const nextBtn = document.querySelector(".next");
            if(newIndex == 0){ //if index value is equal to 0 then hide prevBtn
                prevBtn.style.display = "none"; 
            }
            if(newIndex >= gallery.length - 1){ //if index value is greater and equal to gallery length by -1 then hide nextBtn
                nextBtn.style.display = "none"; 
            }
            prevBtn.onclick = ()=>{ 
                newIndex--; //decrement index
                if(newIndex == 0){
                    preview(); 
                    prevBtn.style.display = "none"; 
                }else{
                    preview();
                    nextBtn.style.display = "block";
                } 
            }
            nextBtn.onclick = ()=>{ 
                newIndex++; //increment index
                if(newIndex >= gallery.length - 1){
                    preview(); 
                    nextBtn.style.display = "none";
                }else{
                    preview(); 
                    prevBtn.style.display = "block";
                }
            }
            document.querySelector("body").style.overflow = "hidden";
            previewBox.classList.add("show"); 
            shadow.style.display = "block"; 
            closeIcon.onclick = ()=>{
                newIndex = clickedImgIndex; //assigning user first clicked img index to newIndex
                prevBtn.style.display = "block"; 
                nextBtn.style.display = "block";
                previewBox.classList.remove("show");
                shadow.style.display = "none";
                document.querySelector("body").style.overflow = "scroll";
            }
        }
        
    }
    
}

</script>

@endsection

