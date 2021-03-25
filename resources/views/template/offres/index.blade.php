@include('template.partials.header')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

body {
  margin : 0 ;
  padding : 0 ;
  transition: all .3s;
}
::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-thumb {
  background:rgba(0, 0, 0, 0.3);
  border-radius:2px;
}
::-webkit-scrollbar-thumb:hover {
  background:rgba(0, 0, 0, 0.9);
  border-radius:2px;
}
.containerr {
  width: 100%;
  margin: 0 auto;
  display :flex;
  flex-wrap:wrap;
}

.card{
  margin : auto;
  width: 350px;
  overflow : hidden;
  border-radius : 20px;
  background : white;
  margin-top:50px;
  transition: all .2s;
  box-shadow:5px 5px 15px rgba(0,0,0, .3);
}

.card:hover {
  box-shadow:5px 5px 25px rgba(0,0,0, .5);
  transform: translate(-5px, -5px);
}

.card:hover .icon svg{
  animation : iconjln 1s;
}

.img-cover{
  position: relative;
}

.card img{
  width: 350px;
  height:350px;
  object-fit:cover;
}

.icon{
  position:absolute;
  top:0;
  padding : 25px;
  right:0;
  border-bottom-left-radius:20px;
  backdrop-filter: blur(20px);
  background-color: rgba(255, 255, 255, 0.5);
  cursor: pointer;
}

.desc{
  padding : 1.5em ;
  font-family: 'Poppins', sans-serif;
}
.desc h1{
  display:inline;
}
.tdesc{
  margin-bottom:40px;
  width:100%;
  height:50px;
  overflow: auto;
}

.desc a{
  text-decoration: none;
  background-color: dodgerblue;
  padding: 15px 25px;
  color:white;
  border-radius: 15px;
  display:block;
  text-align: center;
  transition: all .2s;
}
.desc a:hover{
  background-color: SteelBlue;
}
.desc a:hover svg{
  animation : iconjln 1s;
}

@keyframes iconjln{
  0%, 100% {
    opacity : 1;
    transform: translateX(0%);
  }
  50%{
    opacity:0;
    transform: translateX(100%);
  }
  70%{
    opacity:0;
    transform:translateX(-100%);
  }
}


</style>
<div class="containerr">
    <div class="container mb-5">
        <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
            <div class="container">
                <a href="#"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                    <h2 class="topic-title topic-title-solved">offres en cours</h2>
            </div>
        </div>
    </div>
@forelse ($offres as $offre)
    <div class="card">
      <div class="img-cover"><img src="{{asset('storage/' . $offre->image)}}"><div class="icon"><svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 9H22M12 1.5L20.9333 8.2C21.4667 8.6 21.4667 9.4 20.9333 9.8L12 16.5" stroke="black" stroke-width="3"/>
  </svg>
  </div></div>

      <div class="desc">
        <h1>{{$offre->title}}</h1>
        <p>{{$offre->description}}</p>
        <a href ="">Details <svg width="19" height="14" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 9H22M12 1.5L20.9333 8.2C21.4667 8.6 21.4667 9.4 20.9333 9.8L12 16.5" stroke="white" stroke-width="3"/>
  </svg></a>
      </div>
    </div>
    @empty

</div>

<center> <div class=" container alert alert-info"> Aucune offre pour le moment </div></center>
@endforelse

</div>

<script>
    const clickC = document.querySelector(".desc");

clickC.addEventListener ("click", function (){
const r = Math.round(Math.random() * 255 + 0);
const g = Math.round(Math.random() * 255 + 0);
const b = Math.round(Math.random() * 255 + 0);

document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
});


</script>
@include('template.partials.footer_script')
</body>

</html>



