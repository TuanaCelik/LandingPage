/* seçeneklerin çalışması*/

 function buttonact(){
 var radio0= document.getElementById("artisorani").checked; 
 var radio1= document.getElementById("ozelartisorani").checked;
 var radio2= document.getElementById("konutCheck").checked;
 var radio3= document.getElementById("isyeriCheck").checked;
 var radio4= document.getElementById("ortalama").checked;
 var radio5= document.getElementById("tüfe").checked;

  if(radio0 == true && radio2 == true && radio3 == false ){
    konutartishesapla();

  }
  else if(radio0 == true && radio3 == true && radio2 == false){
    isyeriartishesapla();
  }

  else if(radio4 == true && radio3 == true){
    isyeriartishesapla2();
  }

  else if (radio5 == true && radio3 == true) {
    isyeriartishesapla3();
  }

  else if(radio0 == false && radio1 == true ){
    sum();

}


}

/*özel artış oranı hesaplma fonksiyonu*/
 function sum() {
       var txtFirstNumberValue = document.getElementById('ozelartisoran').value;
       var txtSecondNumberValue = document.getElementById('mevcutkira').value;


       var artis= parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue) / 100;
       var result= parseInt(txtSecondNumberValue) + artis;
       if (!isNaN(result)) {
           document.getElementById('hesapsonuc').value = result;
       }
   }

/*konut için aya göre artış hesaplama*/
    function konutartishesapla() {
       var FirstNumberValue = document.getElementById('mevcutkira').value;
       var Months = document.getElementById('aylar').value;
       var Year = document.getElementById('yillar').value;


       if( Months == '1' && Year == '1'){
       var artis= parseInt(FirstNumberValue) * 4.3 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Months == '2' && Year == '1'){
      var artis= parseInt(FirstNumberValue) * 4.96 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Months == '3' && Year == '1'){
      var artis= parseInt(FirstNumberValue) * 5.87 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Months == '4' && Year == '1'){
      var artis= parseInt(FirstNumberValue) * 6.89 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Months == '5' && Year == '1'){
      var artis= parseInt(FirstNumberValue) * 8.01 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Months == '6' && Year == '1'){
      var artis= parseInt(FirstNumberValue) * 9.02 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Months == '7' && Year == '1'){
      var artis= parseInt(FirstNumberValue) * 9.98 /100;
       var result= parseInt(FirstNumberValue) + artis;

     }
     else if (Months == '8' && Year == '1'){
      var artis= parseInt(FirstNumberValue) * 10.94 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
      else if (Months == '9' && Year == '2'){
      var artis= parseInt(FirstNumberValue) * 4.51 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
      else if (Months == '10' && Year == '2'){
      var artis= parseInt(FirstNumberValue) * 4.07 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
      else if (Months == '11' && Year == '2'){
      var artis= parseInt(FirstNumberValue) * 3.83 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
      else if (Months == '12' && Year == '2'){
      var artis= parseInt(FirstNumberValue) * 3.93 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
       if (!isNaN(result)) {
           document.getElementById('hesapsonuc').value = result;
       }
   }

/*Yurt İçi Üretici Fiyat Endeksi (Yİ-ÜFE)*/

/*iş yeri için aya göre artış hesaplama*/
   function isyeriartishesapla() {
       var FirstNumber = document.getElementById('mevcutkira').value;
       var Months = document.getElementById('aylar').value;
       var Year = document.getElementById('yillar').value;


/*ocak*/
   if( Months == '1' && Year == '1'){
       var artis= parseInt(FirstNumber) * 4.3 /100;
       var result= parseInt(FirstNumber) + artis;
     }

     /*şubat*/
     else if (Months == '2' && Year == '1'){
      var artis= parseInt(FirstNumber) * 4.96 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*mart*/
     else if (Months == '3' && Year == '1'){
      var artis= parseInt(FirstNumber) * 5.87 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*nisan*/
     else if (Months == '4' && Year == '1'){
      var artis= parseInt(FirstNumber) * 6.89 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*mayıs*/
     else if (Months == '5' && Year == '1'){
      var artis= parseInt(FirstNumber) * 8.01 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*haziran*/
     else if (Months == '6' && Year == '1'){
      var artis= parseInt(FirstNumber) * 9.02 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*temmuz*/ 
     else if (Months == '7' && Year == '1'){
      var artis= parseInt(FirstNumber) * 9.98 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '8' && Year == '1'){
      var artis= parseInt(FirstNumber) * 10.94 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '9' && Year == '2'){
      var artis= parseInt(FirstNumber) * 4.51 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '10' && Year == '2'){
      var artis= parseInt(FirstNumber) * 4.07 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '11' && Year == '2'){
      var artis= parseInt(FirstNumber) * 3.83 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '12' && Year == '2'){
      var artis= parseInt(FirstNumber) * 3.93 /100;
       var result= parseInt(FirstNumber) + artis;
     }
       if (!isNaN(result)) {
           document.getElementById('hesapsonuc').value = result + ' TL';
       }
   }

/*TEFE Yİ-ÜFE Ortalama*/
/*iş yeri için aya göre artış hesaplama*/
   function isyeriartishesapla2() {
       var FirstNumber = document.getElementById('mevcutkira').value;
       var Months = document.getElementById('aylar').value;
       var Year = document.getElementById('yillar').value;


/*ocak*/
   if( Months == '1' && Year == '1'){
       var artis= parseInt(FirstNumber) * 6.04 /100;
       var result= parseInt(FirstNumber) + artis;
     }

     /*şubat*/
     else if (Months == '2' && Year == '1'){
      var artis= parseInt(FirstNumber) * 6.36 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*mart*/
     else if (Months == '3' && Year == '1'){
      var artis= parseInt(FirstNumber) * 6.875 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*nisan*/
     else if (Months == '4' && Year == '1'){
      var artis= parseInt(FirstNumber) * 7.55 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*mayıs*/
     else if (Months == '5' && Year == '1'){
      var artis= parseInt(FirstNumber) * 8.335 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*haziran*/
     else if (Months == '6' && Year == '1'){
      var artis= parseInt(FirstNumber) * 9.055 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*temmuz*/ 
     else if (Months == '7' && Year == '1'){
      var artis= parseInt(FirstNumber) * 9.67 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '8' && Year == '1'){
      var artis= parseInt(FirstNumber) * 10.19 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '9' && Year == '2'){
      var artis= parseInt(FirstNumber) * 6.245 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '10' && Year == '2'){
      var artis= parseInt(FirstNumber) * 5.995 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '11' && Year == '2'){
      var artis= parseInt(FirstNumber) * 5.86 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '12' && Year == '2'){
      var artis= parseInt(FirstNumber) * 5.86 /100;
       var result= parseInt(FirstNumber) + artis;
     }
       if (!isNaN(result)) {
           document.getElementById('hesapsonuc').value = result + ' TL';
       }
   }


/*TÜFE ORANLARI*/
   function isyeriartishesapla3() {
       var FirstNumber = document.getElementById('mevcutkira').value;
       var Months = document.getElementById('aylar').value;
       var Year = document.getElementById('yillar').value;


/*ocak*/
   if( Months == '1' && Year == '1'){
       var artis= parseInt(FirstNumber) * 6.04 /100;
       var result= parseInt(FirstNumber) + artis;
     }

     /*şubat*/
     else if (Months == '2' && Year == '1'){
      var artis= parseInt(FirstNumber) * 7.78 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*mart*/
     else if (Months == '3' && Year == '1'){
      var artis= parseInt(FirstNumber) * 7.76 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*nisan*/
     else if (Months == '4' && Year == '1'){
      var artis= parseInt(FirstNumber) * 7.88 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*mayıs*/
     else if (Months == '5' && Year == '1'){
      var artis= parseInt(FirstNumber) * 8.66 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*haziran*/
     else if (Months == '6' && Year == '1'){
      var artis= parseInt(FirstNumber) * 9.09 /100;
       var result= parseInt(FirstNumber) + artis;
     }
     /*temmuz*/ 
     else if (Months == '7' && Year == '1'){
      var artis= parseInt(FirstNumber) * 9.36 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '8' && Year == '1'){
      var artis= parseInt(FirstNumber) * 9.44 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '9' && Year == '2'){
      var artis= parseInt(FirstNumber) * 7.79 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '10' && Year == '2'){
      var artis= parseInt(FirstNumber) * 7.89 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '11' && Year == '2'){
      var artis= parseInt(FirstNumber) * 7.92 /100;
       var result= parseInt(FirstNumber) + artis;
     }
      else if (Months == '12' && Year == '2'){
      var artis= parseInt(FirstNumber) * 7.98 /100;
       var result= parseInt(FirstNumber) + artis;
     }
       if (!isNaN(result)) {
           document.getElementById('hesapsonuc').value = result + ' TL';
       }
   }