<!DOCTYPE html>
<html lang="en">

<head>
<div style="font-family:myriad pro;">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<!-- <script type="text/javascript" src="script.js"></script> -->
<!-- <form id="Sozlesme" action="/userInfo.php" method="post"> -->

    <title>Online Kira Sözleşmesi </title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="sozlesmedesign.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
    body {
        background-repeat: no-repeat;
     
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body background="img_newyork.gif" style="background-size: 100% 100%">
<img src="../css/resources/ekiraaraç.png" style="width:211px;height:79px; ">

   
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                 <style type="text/css">
                .row{

                    border-style: solid;
               
                    border-color: #1d2345;
                    background: rgba(255, 255, 255, 0.5) 

                }
            </style>

<form id="Sozlesme" action="userInfo.php" method="POST">
<fieldset>

<label for="evsahibi">1</label>
<input type="text" name="evsahibi" placeholder="Ev Sahibi Adı,Soyadı *"/><br><br>
<label for="evsahibitc">2</label>
<input type="text" name="evsahibitc"  placeholder="Ev Sahibi T.C Kimlik *"/><br><br>
<label for="evsahibiadres">3</label>
<input type="text" name="evsahibiadres"  placeholder="Ev Sahibinin Adresi *"><br><br>
<label for="kiraci">4</label>
<input type="text" name="kiraci"  placeholder="Kiracının Adı,Soyadı *"><br><br>
<label for="kiracitc">5</label>
<input type="number" name="kiracitc"  placeholder="Kiracı T.C Kimlik *"><br><br>
<label for="kiraciadres">6</label>
<input type="text" name="kiraciadres"  placeholder="Kiracının Adresi *"><br><br>
<label for="kiralananyer">7</label>
<select name="kiralananyer" >
<optgroup label="Kiralanan Yer">
  <option value="ev">Ev</option>
  <option value="ofis">Ofis</option>
</optgroup>
</select>    <br><br>
<label for="odemeduzeni">8</label>
 <select name="odemeduzeni">
<optgroup label="Ödeme Düzeni">
  <option value="aylik">Aylık</option>
  <option value="yillik">Yıllık</option>
</optgroup>
</select> <br><br>
<div style=" font-size: 25px;">Sözleşme Başlangıç Tarihi</div> 
<label for="baslangic">9</label>
<input type="date" name="baslangic"  placeholder="Başlangıç Tarihi *"><br><br>
<div style=" font-size: 25px;" >Sözleşme Bitiş Tarihi</div>
<label for="bitis">10</label>
<input type="date"  name="bitis"  placeholder="Bitiş Tarihi *"><br><br>

<label for="kirabedeli">11</label>
<input type="number"  name="kirabedeli" placeholder="Kira Bedeli *"> <br><br>
<label for="parabirimi">12</label>
<select name="parabirimi" >
<optgroup label="Para Birimi">
  <option value="tl">TL</option>
  <option value="dolar">Dolar</option>
  <option value="euro">Euro</option>
</optgroup>
</select> <br><br>

<label for="banka">13</label>
<input type="text" name="banka"  placeholder="Kiranın Yatacağı Bankanın Adı *"><br><br>
<label for="sube">14</label>
<input type="text" name="sube"  placeholder="Kiranın Yatacağı Şubenin Adı*"><br><br>
<label for="subeno">15</label>
<input type="number" name="subeno"  placeholder="Kiranın Yatacağı Şubenin Numarası *"><br><br>
<label for="iban">16</label>
<input type="number" name="iban"  placeholder="IBAN Numarası *"><br><br>
<label for="hesapno">17</label>
<input type="number" name="hesapno"  placeholder="Hesap Numarası *"><br><br>
<label for="teminat">18</label>
<input type="number" name="teminat"  placeholder="Teminat Bedeli *"><br><br>


<input type="submit" style="color: white; background-color: #e84e1b; border-color: #e84e1b" value="Oluştur" />

<style type="text/css">
    input{
        margin-top: 12px;
        width: 310px;
        height: 30px;
    }

    select{

        width: 310px;
        height: 30px;

    }
</style>
</form>

<span id="result"></span>
</div>
</div>
</div>
</div>
  
   

      
        <!-- /.row -->

    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
