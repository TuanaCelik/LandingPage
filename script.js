/* seçeneklerin çalışması*/

 function buttonact(){
 var radio0= document.getElementById("artisorani").checked; 
 var radio1= document.getElementById("ozelartisorani").checked;
 var radio2= document.getElementById("kiralanan").value;




  if(radio0 == true && radio2 == 1 ){
    konutartishesapla();

  }
  else if(radio0 == true && radio2 == 2 ){
    isyeriartishesapla();
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
     else if (Months == '8' && Year == '2'){
      var artis= parseInt(FirstNumberValue) * 4.77 /100;
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

/*iş yeri için aya göre artış hesaplama*/
   function isyeriartishesapla() {
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
      else if (Months == '8' && Year == '2'){
      var artis= parseInt(FirstNumberValue) * 6.34 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
      else if (Months == '9' && Year == '2'){
      var artis= parseInt(FirstNumberValue) * 6.245 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
      else if (Months == '10' && Year == '2'){
      var artis= parseInt(FirstNumberValue) * 5.995 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
      else if (Months == '11' && Year == '2'){
      var artis= parseInt(FirstNumberValue) * 5.86 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
      else if (Months == '12' && Year == '2'){
      var artis= parseInt(FirstNumberValue) * 5.86 /100;
       var result= parseInt(FirstNumberValue) + artis;
     }
       if (!isNaN(result)) {
           document.getElementById('hesapsonuc').value = result + ' TL';
       }
   }