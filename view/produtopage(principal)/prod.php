<script>
function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "img/menu/menu.png";
    } else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "img/menu/close.png";
    }
}

<?php

require_once '../../model/Manager.php';
$managers = new Managers();
$statement =  $managers->getProdutos();

?>
var img1 = "img/<?php $statement[0]['img']?>";
var img2 = "img/<?php $statement[0]['img']?>";
var img3 = "img/<?php $statement[0]['img_lado']?>";
var img4 = "img/<?php $statement[0]['img_costa']?>";

var imgZoom = document.querySelector("#img-2");


function trocarImagem1(){
    document.getElementById("img-1").src = img1; 
    
}

function trocarImagemZoom1(){
    imgZoom.style.background = "url('img/<?php $statement[0]['img'];?>') no-repeat #FFF"; 
    
}

function trocarImagem2(){
    document.getElementById("img-1").src = img2;

}

function trocarImagemZoom2(){
    imgZoom.style.background = "url('img/<?php $statement[0]['img'];?>') no-repeat #FFF"; 
    
}


  function trocarImagem3(){
    document.getElementById("img-1").src = img3;
    
  }

  function trocarImagemZoom3(){
    imgZoom.style.background = "url('img/<?php $statement[0]['img_lado'];?>') no-repeat #FFF"; 
    
}

  function trocarImagem4(){
    document.getElementById("img-1").src = img4;
    
  }

  function trocarImagemZoom4(){
    imgZoom.style.background = "url('img/<?php $statement[0]['img_costa'];?>')  no-repeat #FFF"; 
    
}
 
//img zoom

let zoomer = function (){
    document.querySelector('#prod-img')
      .addEventListener('mousemove', function(e) {
  
      let original = document.querySelector('#img-1'),
          magnified = document.querySelector('#img-2'),
          style = magnified.style,
          x = e.pageX - this.offsetLeft,
          y = e.pageY - this.offsetTop,
          imgWidth = original.offsetWidth,
          imgHeight = original.offsetHeight,
          xperc = ((x/imgWidth) * 100),
          yperc = ((y/imgHeight) * 100);
  
      //lets user scroll past right edge of image
      if(x > (.01 * imgWidth)) {
        xperc += (.15 * xperc);
      };
  
      //lets user scroll past bottom edge of image
      if(y >= (.01 * imgHeight)) {
        yperc += (.15 * yperc);
      };
  
      style.backgroundPositionX = (xperc - 9) + '%';
      style.backgroundPositionY = (yperc - 9) + '%';
  
      style.left = (x - 180) + 'px';
      style.top = (y - 180) + 'px';
  
    }, false);
  }();
</script>




