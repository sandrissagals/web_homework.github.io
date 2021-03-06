<?php

//not empty

if ($_POST) {
    $errors = array();

//start validation
    if(empty($_POST['username'])){
        $errors['username1'] = "Your username cannot be empty";
    }
    if(empty($_POST['pwd'])){
        $errors['pwd1'] = "Your password cannot be empty";
    }
    if(empty($_POST['email'])){
        $errors['email1'] = "Your email cannot be empty";
    }
    if(empty($_POST['name'])){
        $errors['name1'] = "Your name cannot be empty";
    }
    if(empty($_POST['surname'])){
        $errors['surname1'] = "Your surname cannot be empty";
    }
//check errors
    if (count($errors) == 0) {
        //redirect to success page
        header("Location: success.php");
        exit();
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Bootstrap</title>
</head>

<body data-spy="scroll" data-target="#navbar-site" data-offset="80">
  <style>
    body {
      position: relative;
      padding-top: 80px;
    }
  </style>

<nav id="navbar-site" class="fixed-top navbar navbar-dark bg-primary navbar-expand-sm">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="#about">Par mums</a></li>
      <li class="nav-item"><a class="nav-link" href="#whyus">Kāpēc izvēlēties mūs?</a></li>
      <li class="nav-item"><a class="nav-link" href="#login">Log in</a></li>
      <li class="nav-item"><a class="nav-link" href="#signin">Sign in</a></li>
    </ul><!-- navbar-nav -->
  </div><!-- container -->
</nav>

<div class="container">

  <div class="content" id="about">
    <h2>Par mums</h2>

    <p><b>Vīzija</b> – tehnikums ir Eiropas prasībām atbilstoša profesionālās izglītības iestāde.<br>
      <b>Misija</b> – tehnikuma darbības pamatuzdevums ir garantēt izglītojamiem iespēju iegūt kvalitatīvu izglītību un profesionālu kompetenci.<br>
      <b>Stratēģija</b> - tehnikums īsteno valsts interesēm atbilstošu ilgtermiņa izglītības politiku, radot bāzi pamatotām pārmaiņām profesionālajā izglītībā.<br>
      <b>Mērķis</b> - celt profesionālās izglītības prestižu jaunatnes vidū un veicināt izglītojamo vēlmi iegūt kvalitatīvu profesionālo izglītību.<br>
      <b>Uzdevumi</b> – nodrošināt apstākļus izglītojamo karjeras izaugsmei un harmoniskai attīstībai, izglītojamo cilvēkresursu, sociālo un identitātes resursu paplašināšanai;<br>
      - aktualizēt esošās un ieviest jaunas mācību programmas atbilstoši sabiedrības prasībām;<br>
      - pilnveidot materiāli tehnisko bāzi, mācību procesa metodisko un organizatorisko nodrošinājumu. </p>
    <h2>Nedaudz no tehnikuma vēstures</h2>
    <p>Tehnikuma pirmsākumi meklējami laika posmā pirms Pirmā pasaules kara. Būvtehniskā sabiedrība Rīgā atvēra tehnikumu, kas ar 240 audzēkņiem 1918. gada 21. oktobrī uzsāka mācības. Izglītības ministrija 1919. gada 24.augustā nodeva Būvtehniskajai sabiedrībai bijušās Nikolaja ģimnāzijas telpas Krišjāņa Valdemāra (toreiz Nikolaja) ielā 1c. Būvtehniskā sabiedrība saveda kārtībā trīsstāvīgo ķieģeļu ēku, kas pēc arhitekta A. Kīzelbaša projekta celta 1891. gadā (1935. gadā ēkai uzcelta piebūve, kas vērsta uz Noliktavas ielu, 1970. gadā – jaunais laboratoriju korpuss un vēlāk sporta zāle.<br>
      Latvijas Ministru kabineta sēdē 1919. gada 29. decembrī tika pieņemts lēmums atvērt tehnisko vidusskolu kā valsts mācību iestādi. Skolā darbojās būvniecības nodaļa, kultūrtehniskā nodaļa, drīz nāca klāt ķīmijas un mehānikas, bet ar 1929./30. mācību gadu elektrotehnikas nodaļa, nedaudz vēlāk arī dzelzceļa ekspluatācijas nodaļa.<br>
      Līdz 1940. gadam tehnikumu absolvēja 1505 audzēkņi, daudzi turpinājuši izglītību augstākajās mācību iestādēs, kļuvuši par uzņēmējiem, rūpniekiem, izciliem tautsaimniecības, zinātnes, kultūras darbiniekiem. Latviju pasaulē pazīstamu darījuši leģendāri cilvēki: komandkapteinis Hugo Legzdiņš - 1924. gada Mehānikas nodaļas absolvents - Latvijas Kara flotes virsnieks, ar diviem Triju Zvaigžņu ordeņiem apbalvotais zemūdenes ”Ronis” komandieris. Gadu vēlāk to pašu nodaļu absolvēja pazīstamais lidmašīnu konstruktors un būvētājs Kārlis Irbītis. Daudzi absolventi otrā pasaules kara laikā aizbrauca uz citām valstīm un tur sekmīgi darbojās dažādās jomās.<br>
      RVT darbību pārtrauca padomju okupācija – 1940. gada jūnijā tehnikumā nomainīja administrāciju, daļēji arī mācību programmas. Smags, sarežģīts bija arī vācu okupācijas periods (1941 – 1944). Taču, spītējot kara laika grūtībām, mācības tika turpinātas. Pēc kara 1945.gadā tehnikumu pārdēvēja par „Rīgas industriālo politehnikumu”. Nosaukumu „Rīgas Valsts tehnikums” atjaunoja 1991. gada 30.augustā.<br>
      Vērtīgu ceļamaizi tālākai izglītībai, raženam zinātniskajam, kultūras un valsts darbam tehnikumā guvuši daudzi pēckara RVT absolventi: Latvijas ekspremjers Valdis Birkavs, RTU rektors LZA akadēmiķis Egons Lavendelis, LZA akadēmiķi Gunārs Čipēns, Uldis Viesturs un Mārtiņš Kalniņš, LMA rektors Valdis Dišlers, LLA rektors Olģerts Ozols, daudzi zinātņu doktori, izcilie basketbolisti Skaidrīte Smildziņa-Budovska, Maigonis Valdmanis, Raimonds Karnītis, būvsabiedrības „ RBSSKALS” vadītājs Māris Saukāns, dažādu periodu ministri - Māris Vītols, Dzintars Rasnačs, Ainārs Šlesers, Ēriks Jekabsons, Jānis Janovskis un citi.<br>
      Tehnikumā ir deviņas nodaļas un četras struktūrvienības reģionos, mācās vairāk nekā 2100 audzēkņu. Tehnikumu 95 gadu laikā absolvējuši vairāk nekā 36 000 speciālistu. </p>

  </div>

  <div class="content" id="whyus">
    <h2>Kāpēc izvēlēties mūs?</h2>

    <section>
      <h3>Kvalifikācija</h3>
      <p><b>RVT</b> īsteno trešā profesionālās kvalifikācijas līmeņa izglītības programmas, metodiskā centra un ārpus formālās izglītības sistēmas iegūtās profesionālās kompetences novērtēšanas funkcijas, nodrošina valsti ar kvalificētiem speciālistiem.</p>
    </section>

    <section>
      <h3>Vērtību gūšana</h3>
      <p><b>RVT</b> tiek īstenots mērķtiecīgs darbs, lai virzītu audzēkņu izziņas un pašizveidošanās darbību, lai viņi aktualizētu sabiedrībā dominējošās kultūras vērtības un darba tikumu, lai tehnikums audzēkņiem ir ne tikai zināšanu sniedzējs, bet arī garīgo un morālo vērtību veidotājs.</p>
    </section>

    <section>
      <h3>Sabiedriskās dzīves iedvesmotājs</h3>
      <p><b>RVT</b> rosina jauniešus aktīvai un radošai darbībai savas skolas, novada/pilsētas un valsts sabiedriskajā un kultūras dzīvē, apkārtējās vides izzināšanā un sakopšanā, nodrošinot audzēkņiem praktiskas iespējas iesaistīties tautas tradīciju un kultūrvēsturiskā mantojuma apzināšanā un saglabāšanā. </p>
    </section>
  </div>

  <div class="content" id="login">
    <h2>Ienākt</h2>
    <form method="POST"  >

      <fieldset class="form-group">

        <div class="form-group">
          <label class="form-control-label" for="username">Username</label>
          <input <input class="form-control" type="text" id="usernamelogin" name="usernamelogin" placeholder="Your Username" required>
        </div><!-- form-group -->

        <div class="form-group">
          <label for="pwd">Password:</label><br>
          <input class="form-control" type="password" id="pwdlogin" name="pwdlogin" placeholder="Password" minlength="8" required>
        </div><!-- form-group -->

        <button class="btn btn-primary" type="submit">Submit</button>

      </fieldset><!-- fieldset -->
    </form>
 </div>

  <div class="content" id="signin">
    <h2>Piereģistrēties</h2>
    <form method="POST" accept-charset='UTF-8'>

        <fieldset class="form-group">

            <div class="form-group">
                <label class="form-control-label" for="username">Username</label>
                <input  class="form-control" type="text" name="username" id="username" placeholder="Your Username" minlength="1" required>
                <span><?php if (isset($errors['username1'])) echo $errors['username1'];?></span>
            </div><!-- form-group -->

            <div class="form-group">
                <label for="pwd">Password:</label><br>
                <input class="form-control" type="password" name="pwd" id="pwd" placeholder="Password" minlength="8" required>
                <span><?php if (isset($errors['pwd1'])) echo $errors['pwd1'];?>
            </div><!-- form-group -->

            <div class="form-group">
                <label class="form-control-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Address" required>
                <span><?php if (isset($errors['email1'])) echo $errors['email1'];?>
            </div><!-- form-group -->
            <div class="form-group">
                <label class="form-control-label" for="name">Name</label>
                <input  class="form-control" type="text" name="name" id="name" placeholder="Your Name" >
                <span><?php if (isset($errors['name1'])) echo $errors['name1'];?>
            </div><!-- form-group -->
            <div class="form-group">
                <label class="form-control-label" for="surname">Surname</label>
                <input  class="form-control" type="text" name="surname" id="surname" placeholder="Your Surname" >
                <span><?php if (isset($errors['surname1'])) echo $errors['surname1'];?>
            </div><!-- form-group -->
            <label class="form-control-label" for="image">Image</label>
            <input type="file" name="myFile" name="filename">
            <button class="btn btn-primary" type="submit">Submit</button>
        </fieldset><!-- fieldset -->

    </form>


  </div>

</div><!-- content container -->

<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
$(function() {
  var topoffset = 70; //variable for menu height

  //Use smooth scrolling when clicking on navigation
  $('.navbar-nav a').click(function() {
    if (location.pathname.replace(/^\//,'') ===
      this.pathname.replace(/^\//,'') &&
      location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-topoffset
        }, 500);
        return false;
      } //target.length
    } //click function
  }); //smooth scrolling
});

</script>
</body>
</html>