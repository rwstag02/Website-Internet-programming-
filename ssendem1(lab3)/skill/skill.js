let numberImage = 1;
const countImage = 3;
const pathImages = "/image/gallery/gallery2/";




function changeImage(){

let image = pathImages+ "0" + numberImage + ".jpg";
     //document.getElementById("mainImage").src = pathImages + "0" + numberImage + ".jpg";
     $("#mainImage").fadeOut( "slow", function (){
          $("#mainImage").attr("src", image);
          $("#mainImage").fadeIn("slow");
     });
}





/**
 * левый клик
 */

function leftChangeImage(){
     if (numberImage > 1)
          numberImage--;
     else
          numberImage = countImage;
     changeImage()
}

/**
 * правый клик
 */


function rightChangeImage(){
     if (numberImage < countImage)
          numberImage++;
     else
          numberImage = 1;
     changeImage()
}

