<?php
	include_once('DB.php');
	
	$evsahibi   = $_POST['evsahibi'];
	$evsahibitc = $_POST['evsahibitc'];
	$evsahibiadres= $_POST['evsahibiadres'];
	$kiraci= $_POST['kiraci'];
	$kiracitc= $_POST['kiracitc'];
	$kiraciadres= $_POST['kiraciadres'];
	$kiralananyer= $_POST['kiralananyer'];
	$odemeduzeni= $_POST['odemeduzeni'];
	$baslangic= $_POST['baslangic'];
	$bitis= $_POST['bitis'];
	$kirabedeli= $_POST['kirabedeli'];
	$parabirimi= $_POST['parabirimi'];
	$banka= $_POST['banka'];
	$sube= $_POST['sube'];
	$subeno= $_POST['subeno'];
	$iban= $_POST['iban'];
	$hesapno= $_POST['hesapno'];
	$teminat= $_POST['teminat'];
	
	        $myfile = fopen("sozlesme.doc", "w") or die("Unable to open file!");
	        $txt="KİRA SÖZLEŞMESİ \n\n\n\n";
			fwrite($myfile, $txt);
			$txt="Kiraya Veren          : ";
			fwrite($myfile, $txt);
            $txt = $evsahibi;
            fwrite($myfile, $txt);
			$txt="\n";
			fwrite($myfile, $txt);
			$txt="Kiracı (adı/soyadı)   : ";
			fwrite($myfile, $txt);
			$txt=$kiraci;
			fwrite($myfile, $txt);
			$txt="\n";
			fwrite($myfile, $txt);
			$txt="Kiracı T.C. Kimlik No : ";
			fwrite($myfile, $txt);
			$txt=$kiracitc;
			fwrite($myfile, $txt);
			$txt="\n";
			fwrite($myfile, $txt);
			$txt="Kiralanan yer         : ";
			fwrite($myfile, $txt);
			$txt=$kiraciadres;
			fwrite($myfile, $txt);
			$txt="\n";
			fwrite($myfile, $txt);
			$txt="Kira Bedeli           : Aylık net '$kirabedeli' TL ";
			fwrite($myfile, $txt);
			$txt="\n";
			fwrite($myfile, $txt);
			$txt="Kiranın Ödenme Şekli  : '$odemeduzeni' ödemeler halinde sözleşmede belirtilen banka hesabına ödenecektir.";
			fwrite($myfile, $txt);
			$txt="\n";
			fwrite($myfile, $txt);
			$txt="Kiranın bitiş tarihi  :'$bitis' .";
			fwrite($myfile, $txt);
			$txt="\n";
			fwrite($myfile, $txt);
			$txt="Kiralanan şeyin cinsi : '$kiralananyer' \n";
			fwrite($myfile, $txt);
			$txt="Kiranın başlangıç tarihi : '$baslangic' \n\n";
			fwrite($myfile, $txt);
			$txt="ÖZEL ŞARTLAR \n\n";
			fwrite($myfile, $txt);
			$txt="1-Mecur kiracı tarafından 3.Şahıslara devir, temlik ve ciro edilemez, başkalarının istifadesine sunulamaz. Münhasıran ikametgah olarak kullanılacaktır. Mecurda kısa süreli misafirlikler dışında kiracı ve ailesinden başkası daimi olarak ikamet edemez.


2-Apartman Yönetimi tarafından tahakkuk ettirilmiş her türlü apartman ortak gideri kiracıya aittir. Apartman ortak giderinin geç yatırılması halinde doğacak her türlü sorumluluk da kiracıya aittir. Apartman ortak giderleri de aynen kira parası gibi hukuki statü içindedir. Bunların da süresinde ödenmemiş olması kiracının kira parasında temerrüde düşmesi gibi sonuç doğurur ve tahliyeye neden olur.


3-Kira bedeli '$kirabedeli' peşin ödemeler halinde kiraya verenin  '$banka' Bankası  '$sube' Şubesi IBAN: TR'$iban'; Şube No: '$subeno'  Hesap No: '$hesapno' numaralı TL hesabına yatırılacaktır.  Kiracı, kira parasını TL olarak Kiraya Veren’in hesabına Aylık periyotlar halinde ve Aylık peşin ödemeler şeklinde ödeyecektir. Kira bedelinin havalesi halinde, havale edildiği tarih değil, hesaba girdiği tarih esastır. Havale giderleri kira parasından tenzil edilemez.

4-Kira bedeli için aylık net '$kirabedeli' TL’ dir. Kira bedelleri Aylık periyotlar halinde ve  Aylık peşin ödemeler şeklinde en geç ilgili ayın 01-05’i arasında işbu Sözleşme’nin 3. Maddesi gereğince peşin olarak ödenir. İlk Aya ait kira bedeli olan $kirabedeli TL (net)  $baslangic tarihinde Sözleşme’nin 3. maddesindeki banka hesabına nakit olarak ödenecektir. Kiracı tarafından Kira bedelinin işbu Sözleşme’de belirtildiği şekilde ödenmemesi halinde tüm kira bedelleri de muaccel hale gelecek olup, ayrıca Kiraya veren için mecurun tahliyesini talep etme hakkı doğacaktır. Kira Sözleşmesi’nin süresinin işbu Sözleşmede belirtildiği şekilde uzaması halinde yeni sene kirası Tarafların karşılıklı mutabakatı ile bulunur ve o kira bedeli işbu Sözleşme’nin 3. Maddesinde belirtilen hesaba yine aylık peşin-nakit ödemeler halinde yatırılmaya devam olunur. Kiracı ayrıca Kiralanana ilişkin su, elektrik ve gaz giderlerini zamanında ödemekle yükümlüdür.  


5-Mecur’a verilecek zararların teminatı olmak üzere kiracıdan '$teminat' TL (net) tutarında teminat akçesi alınacak olup, teminat akçesi işbu sözleşmenin 3. Maddesinde belirtilen hesaba '$baslangic' tarihinde yatırılacak olup, teminat akçesinin yatırılmaması halinde işbu kira sözleşmesi geçerlilik kazamayacak ve taraflar için bağlayıcı olmayacaktır. Tahliye zamanında Mecur’un hasarsız ve işbu Sözleşme’nin diğer maddelerine uygun olarak teslimi ile birlikte teminat akçesi aynen kiracıya iade olunacaktır. Mecur’da hasar var ise, bunun ilgili hasarların giderilme bedeli tenzil edilerek bakiye teminat akçesi kiracıya ödenecektir. Bu temin edilemiyorsa Demirbaşlarda ve/veya mecurda meydana gelebilecek hasar, zarar ve eksiklikler, mecurun tahliye tarihindeki cari değerleri üzerinden KİRACI tarafından tazmin edilecektir. 

6-Ayrıca aynı teminat akçesi, apartman ortak giderlerinin ödenmemesi, su, elektrik, doğalgaz borçları için de mal sahibince kullanılacaktır. Adı geçen aboneliklerden su ve doğalgaz giderleri apartman aidatı içerisine dahil olarak ödenecek olup elektrik aboneliği kira akdinin tanziminden itibaren en geç 30 gün içinde Kiracı adına geçirilecektir. Elektrik, aboneliğinin 30 gün içinde kiracı adına ilgili idareleriyle sözleşme yapılarak tesis edilmemesi halinde akde muhalefet oluşur ve akit fesih edilir. 

7- Mecur tüm mütemmim cüzler ile birlikte temiz, eksiksiz ve tam olarak kiracıya teslim edilmiştir. Tahliye halinde, daireye ait mütemmim cüz ve eşyalar olağan yıpranma dışında tam ve hasarsız olarak, alındığı gibi mal sahibine iade olunmalıdır. Keza banyolarda duşakabin yaptırılmış ise, ya montaj deliklerinin olduğu fayanslar yenilenecek, ya da duşakabin aynen ve bilabedel terk edilecektir. Daire boyası yeni olup, tahliye halinde hasarsız olarak kabul edilebilir bir yıpranma ile boyalı ve temiz olarak geriye teslim olunacaktır. Aksi halde teminat akçesinden hasarlar ve eksikler giderilir. 

8- Kira akdinin bir sonraki yıl yenilenmeyeceği konusunda, taraflar birbirlerine dönem sonundan en az 45 gün önce diğer tarafın eline geçecek şekilde ihtar keşide edeceklerdir. Kira döneminin bitiminden en az 45 gün önce karşı yanın eline geçmemiş olan fesih yazısı o kontratın bir yıllığına daha yenilendiği anlamını doğurur. Bu halde Kiracı bir sonraki dönem sonuna kadar kiralardan ve ortak gider ödemelerinden sorumlu olacaktır.

KİRACI, işbu kira sözleşmesini feshetmek ve mecuru tahliye etmek amacıyla sözleşmenin sona erme tarihinden 45 gün önce ihbarda bulunduğu takdirde, bu süre içerisinde muhtemel kiracılara, biri hafta sonu olmak üzere, en az haftada iki kez, KİRALAYAN’ın talep edeceği makul zamanlarda gündüz vakti mecuru göstermeyi veya gösterilmesine müsaade etmeyi şimdiden kabul ve taahhüt eder.


9-Apartmana ait yönetim kurallarını aynen kabul etmiştir. İdare ile ters düşmemeye titizlik gösterecektir.

10-Tarafların tebligata salih adresleri aşağıdaki gibidir. Herhangi birinin adresindeki değişiklik karşı yana yazılı olarak ihbar olunmadığı takdirde bu adrese yapılan yazışmalar karşı yana tebliğ edilmemiş olsa bile, tebliğ edilmiş sayılacaktır. Taraflar şimdiden bu hususu kabul etmişlerdir.\n\n";
			fwrite($myfile, $txt);
			$txt="Kiralaya Veren 

'$evsahibi' ( T.C. No:'$evsahibitc')
Adres: '$evsahibiadres'


Kiracı 
'$kiraci' (T.C No: '$kiracitc')

Adres:  '$kiraciadres'


11- Kira dönemi içinde Mecurda meydana gelecek her türlü, yangın, su basması ve benzeri her türlü felaketin sonuçlarından kiracı mesuldur. Keza 3.şahıslara verilecek her türlü yangın, duman ve su basması ve benzeri zararlardan da kiracı sorumludur. Bu nedenle, kiracı sorumluluğu bir sigorta şirketine yükleyecek, gerek kiralanan daire ve gerekse 3.şahıslara verilecek zararlardan ötürü Taraflarca birlikte bir bedel saptanacak ve Kiracı tarafından ihtiyari mali mesuliyet sigortası yaptıracaktır. 

12- İşbu Kira Sözleşmesinin akdinden doğan damga vergisi de dahil her türlü vergi, yasal mevzuata uygun olarak süresinde Kiracı tarafından ödenecek olup, damga vergisi ve diğer vergilerin ödendiğini gösterir evrakın bir kopyasını Kiralayana teslim edecektir. 

13- İşbu Sözleşme’den doğan herhangi bir ihtilaf halinde ……………….. İcra Daireleri ile …………………. Mahkemeleri yetkili mahkemeler olarak taraflarca şimdiden belirlenmiştir.

İşbu kira akdi 1 nüsha ve iki adet ekten ibaret olup, orijinal nüshası Kiralayan tarafından muhafaza edilecek ve bir kopyası Kiracıya verilecektir. Taraflar tümüyle bu 13 Maddeden ibaret kira akdini okumuşlar, anladıklarını ifade ederek üzerlerine düşen edimleri taahhüt ederek birlikte imza altına almışlardır. Kiracının nüfus cüzdan fotokopileri işbu sözleşmenin ayrılmaz parçası olarak ektedir. İş bu sözleşme taraflar arasında '$baslangic' tarihinde imzalanmıştır.

EKLER :

Kiracıya ait nüfus cüzdan fotokopileri


KİRACI	                                                                                    KİRAYA VEREN                                                              

";
			fwrite($myfile, $txt);
			
	        fclose($myfile);
						
			
	if(mysqli_query($conn,"INSERT INTO test(evsahibi,evsahibitc,evsahibiadres,kiraci,kiracitc,kiraciadres,kiralananyer,odemeduzeni,baslangic,bitis,kirabedeli,parabirimi,banka,sube,subeno,iban,hesapno,teminat) VALUES ('$evsahibi', '$evsahibitc','$evsahibiadres','$kiraci','$kiracitc','$kiraciadres','$kiralananyer','$odemeduzeni','$baslangic','$bitis','$kirabedeli','$parabirimi','$banka','$sube','$subeno','$iban','$hesapno','$teminat')"))
	   
	        echo "Success";
				   
	else
	    echo "Insertiıon Failed" ;
	
?>


<html>
<head>
<title>Sozlesme Hazir</title>
<style> 
body {
    background-image: url("img_istanbul3.jpg") ;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #e84e1b;
  border: none;
  border-radius: 15px;
  box-shadow: 0 2px #999;

}

.button:hover {background-color: #1d2345}

.button:active {
  background-color: #1d2345;
  box-shadow: 0 0px #666;
  transform: translateY(4px);
   
}
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<style>
h2 {
    text-align: center;
	color: #FFFFFF;
}

</style>
<h2>Sözleşmen Hazır</h2>


<form id="Sozlesme" action="sonuc.php" method="post">



<div class="w3-center">
<div class="w3-bar">
<button class="button">Sözleşmeyi İndir</button>
</div>
</div>
</body>
</html>