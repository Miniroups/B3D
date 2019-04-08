<header>
<nav class="sauge">
    
<a id="logoB3D" href="index.php"><img src="images/logo.png"></a>

<div class="nav-toggle">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</div>

<ul>
  <li>
    <a href="index.php"><?= $LG['menu_home'] ?></a>
  </li>

  <li>
    <a href="societe.php"><?= $LG['menu_society'] ?></a>
  </li>

  <li>
    <a><?= $LG['menu_products'] ?></a>
    <ul class="sub-menu">
      <li><a href="acacia.php"><?= $LG['menu_products_acacia'] ?></a></li>
      <li><a href="pin.php"><?= $LG['menu_products_pine'] ?></a></li>
      <li><a href="chataignier.php"><?= $LG['menu_products_chestnut'] ?></a></li>
      <li><a href="bois-de-chauffe.php"><?= $LG['menu_products_wood'] ?></a></li>
    </ul>

    <div class="nav-panel">
    <div class="product-area-content">
    <a class="product-link" href="acacia.php">
    <img src="images/menu-produits-acacia-5-small.jpg" alt="produits B3D - acacia">
    <div class="product-name"><?= $LG['menu_products_acacia'] ?></div>
    </a>

    <a class="product-link" href="pin.php">
    <img src="images/menu-produits-pin-1-small.jpg" alt="produits B3D - pin">
    <div class="product-name"><?= $LG['menu_products_pine'] ?></div>
    </a>

    <a class="product-link" href="chataignier.php">
    <img src="images/menu-produits-chataignier-2-small.jpg" alt="produits B3D - chataignier">
    <div class="product-name"><?= $LG['menu_products_chestnut'] ?></div>
    </a>

    <a class="product-link" href="bois-de-chauffe.php">
    <img src="images/menu-produits-acacia-7-small.jpg" alt="produits B3D - bois de chauffe">
    <div class="product-name"><?= $LG['menu_products_wood'] ?></div>
    </a>
    <!-- product-area-content --></div>
    <!-- nav-panel --></div>
  </li>

  <li>
    <a href="contact.php"><?= $LG['menu_contact'] ?></a>
  </li>

  <li id="notFlags">
    <a href="index.php"><?= $LG['menu_langue'] ?></a>
    <ul>
      <li><a href="?lg=fr"><?= $LG['menu_langue_french'] ?></a></li>
      <li><a href="?lg=en"><?= $LG['menu_langue_english'] ?></a></li>
      <li><a href="?lg=es"><?= $LG['menu_langue_spanish'] ?></a></li>
      <li><a href="?lg=de"><?= $LG['menu_langue_deutsch'] ?></a></li>
    </ul>
  </li>
</ul>
</nav>
  
<div id="flags">
  <a href="?lg=fr"><img src="images/FR.svg" alt="French Flag"></a>
  <a href="?lg=en"><img src="images/EN.svg" alt="English Flag"></a>
  <a href="?lg=es"><img src="images/ES.svg" alt="Español Flag"></a>
  <a href="?lg=de"><img src="images/DE.svg" alt="Deutsch Flag"></a>
</div>
</header>

<script>

  window.addEventListener('DOMContentLoaded', function() {

    var navToggle = document.querySelector('nav.sauge .nav-toggle');

    var navList = document.querySelector('nav.sauge > ul');

    if(!navToggle || !navList) { return; }

    navToggle.addEventListener('click', function() {

      if(!navList.style.display) {

        navList.style.display = 'block';
      }
      else { navList.removeAttribute('style'); }
    });

    var collapseBreakpoint = 992;

    var mode = (window.innerWidth < collapseBreakpoint) ? 'collapse' : 'expand';

    window.addEventListener('resize', function(e) {

      if(mode === 'collapse' && window.innerWidth >= collapseBreakpoint) {

        navList.removeAttribute('style');

        mode = 'expand';
      }
      else if(mode === 'expand' && window.innerWidth < collapseBreakpoint) {

        mode = 'collapse';
      }
    });

    hightLightTopNavItem();
  });

  function hightLightTopNavItem() {

    if(!document.body.closest) { return; }

    var currentPage = window.location.pathname.split('/').pop();

    var a = document.querySelector('a[href="' + currentPage + '"]');

    var topLI = a.closest('nav > ul > li');

    topLI.classList.add('active');

    topLI.querySelector('a').removeAttribute('href');
  }

</script>
