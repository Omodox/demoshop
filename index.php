<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>---</title>
    <link href="style/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
   <meta name="keywords" content="">
   <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar" rel="stylesheet">
</head>
<body>
<div class="main">
<div class="header_box">
<header>
    
    <div class="row">
        <div class="s3">
            <a href="#" class="logo"><span>Demo</span><span>Shop</span></a>
        </div>
        <div class="s5">
            <form action="" method="post" class="search">
                <input type="text" placeholder="Suchbegriff..">
               <button class="glyphicon glyphicon-search"></button>
            </form>
        </div>
        <div class="s4">
        <div class="right_top_nav">
               <button class="glyphicon glyphicon-time"> <span id="digital_watch"></span></button>
               <button class="glyphicon glyphicon-list-alt"> Wunschisten</button>
               <button class="glyphicon glyphicon-question-sign"> Servise/Hilfe</button>
           </div>
           <div class="header_menu_buttons">
            <button class="heart"><span class="glyphicon glyphicon-heart"></span></button>
               <button><span class="glyphicon glyphicon-user"></span><span class="msg_to"></span> <span class="my_name"><?php echo $_SESSION['my_name']; ?></span></button>
            <button id="basket_open"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="sum"><?php if ($_SESSION['money'] != "")  echo $_SESSION['money']; else echo '0.00' ?></span><span id="sum_e"> € *</span></button>
            </div>
        </div>
    </div>
    <nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Hohenluft & Abenteure</a></li>
        <li><a href="#" id="active">Kochust & Provence</a></li>
        <li><a href="#">Handwerk & Tradition</a></li>
        <li><a href="#">Specials & Sale</a></li>
        <li><a href="#">Blog</a></li>
    </ul>
</nav>
</header>
</div>

<div class="content_box">
<div class="crumbs">
    <a href="#">Kochust & Provence</a>
    <a href="#">Essen</a>
    <a href="#">Ole & Gewurze</a>
    <a href="#" id="active_crumbs">Essign & Ol</a>
</div>

<div class="market_box">
    <h3>Topseller</h3>
    <hr>
    <div class="row">
        <div class="s2">
           <div class="product">
               <img src="img/De-Cecco-Classico-460x460.jpg" alt="Oil">
               <span class="name_p">Quinta de Sao gga</span>
               <span>inhalt 0.25 Liter (39,96€/ 1 Liter)</span>
               <span><span class="price_p black">5.90</span>€*</span>
           </div>
        </div>
         <div class="s2">
           <div class="product">
               <img src="img/extra-virgin-gold-extracted-olive-oil-300x300.jpg" alt="Oil">
                <span class="name_p">Quinta de Sao Vicente</span>
               <span>inhalt 0.25 Liter (39,96€/ 1 Liter)</span>
               <span><span class="price_p black">9.90</span>€*</span>
           </div>
        </div>
         <div class="s2">
           <div class="product">
               <img src="img/olivkovoe-maslo-carapelli-delicato-extra-vergine.jpg" alt="Oil">
                 <span class="name_p">Quinta de Sao Ol</span>
               <span>inhalt 0.25 Liter (39,96€/ 1 Liter)</span>
               <span><span class="price_p black">7.20</span>€*</span>
           </div>
        </div>
    </div>
</div>
<div class="shadow" id="shadow"></div>
<div class="basket" id="basket">
    <div class="head_basket">
        <span id="close_basket">Waiter einkaufen</span>
    </div>
    
    <div class="products">
       <?php  echo $_SESSION['lorem']; ?>
    </div>
     <div class="product_basket hide">
           <img src="" alt="Oil">
           <div class="product_basket_box">
            <span class="count_p">1</span><span class="count_p_x">x</span> <span class="name_p">Quinta de Sao Vicente</span>
             <span class="price_p"><span class="price_p_x"></span></span>
             </div>
             <div class="product_basket_box_button">
             <button class="delete_p">X</button>
             </div>
        </div>
    <div class="result">
       <table>
           <tr>
               <td class="bold">Zwischensumme</td>
               <td class="bold"><span id="sum2"> <?php if ($_SESSION['money'] != "")  echo $_SESSION['money']; else echo '0.00' ?></span>€</td>
           </tr>
            <tr>
               <td><span class="gold">Punkte fur die Bestellung:</span></td>
               <td ><span>0</span>€*</td>
           </tr>
            <tr>
               <td><span class="gold">Punkte eingelost:</span></td>
               <td><span>0</span>€*</td>
           </tr>
       </table>
       
       <button class="zur">Zur Kasse</button> 
       <button class="Warenkorb">Warenkorb bearbeiten</button> 
    </div>
</div>
<div class="name_form" id="name_form">
   <div class="form_box">
    <h3>Your Name</h3>
    <hr>
    <form action="javascript:void(null);" id="formx" onsubmit="call_name()" method="post">
        <input name="my_name" id="my_name_input" type="text">
        <button>Ок</button>
    </form>
    </div>
</div>
<div class="name_form" id="Aktien" data-veiws="<?php echo $_SESSION['my_page'] ?>">
   <div class="form_box">
    <h3>Aktien</h3>
    <hr>
    <div class="row">
    <div class="s6">
        <div class="product">
               <img src="img/De-Cecco-Classico-460x460.jpg" alt="Oil">
               <span class="name_p">Quinta de Sao gga</span>
               <span>inhalt 0.25 Liter (39,96€/ 1 Liter)</span>
               <span><span class="price_p black">5.90</span>€*</span>
           </div>
           </div>
           <div class="s6">
                <div class="product">
               <img src="img/olivkovoe-maslo-carapelli-delicato-extra-vergine.jpg" alt="Oil">
                 <span class="name_p">Quinta de Sao Ol</span>
               <span>inhalt 0.25 Liter (39,96€/ 1 Liter)</span>
               <span><span class="price_p black">7.20</span>€*</span>
           </div>
           </div>
        </div>
    </div>
</div>


<?php
  if ($_POST['price'] != "")    $_SESSION['lorem'] = $_POST['price'];
  if ($_POST['money'] != "")    $_SESSION['money'] = $_POST['money'];
  if ($_POST['my_name'] != "")    $_SESSION['my_name'] = $_POST['my_name'];    
                   
 if ($_POST['price'] == "")   $_SESSION['my_page'] =  $_SESSION['my_page'] + 1;
    ?>
</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/mine.js"></script>
</body>
</html>
