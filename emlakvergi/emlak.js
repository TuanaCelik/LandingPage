 function vergihesaplama() {
       var FirstNumberValue = document.getElementById('rayicdegeri').value;
       var Belediye = document.getElementById('belediye').value;
       var Mekan = document.getElementById('tasinmaz').value;
      


       if( Belediye == '1' && Mekan == '3'){
       var artis= parseInt(FirstNumberValue) * 2 /1000;
       //var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Belediye == '1' && Mekan == '4'){
      var artis= parseInt(FirstNumberValue) * 1 /1000;
       //var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Belediye == '1' && Mekan == '5'){
      var artis= parseInt(FirstNumberValue) * 1 /1000;
      // var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Belediye == '1' && Mekan == '6'){
      var artis= parseInt(FirstNumberValue) * 3 /1000;
     //  var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Belediye == '2' && Mekan == '3'){
      var artis= parseInt(FirstNumberValue) * 4 /1000;
     //  var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Belediye == '2' && Mekan == '4'){
      var artis= parseInt(FirstNumberValue) * 2 /1000;
      // var result= parseInt(FirstNumberValue) + artis;
     }
     else if (Belediye == '2' && Mekan == '5'){
      var artis= parseInt(FirstNumberValue) * 2 /1000;
      // var result= parseInt(FirstNumberValue) + artis;
     }
       else if (Belediye == '2' && Mekan == '6'){
      var artis= parseInt(FirstNumberValue) * 6 /1000;
      // var result= parseInt(FirstNumberValue) + artis;
     }

       if (!isNaN(artis)) {
           document.getElementById('vergisonuc').value = artis ;
       }
   }