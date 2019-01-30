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
        <a href="index.php">Accueil</a>
      </li>

      <li>
        <a href="societe.php">Société</a>
      </li>

      <li>
        <a>Produits</a>
<div class="nav-panel">
<div class="product-area-content">
<a class="product-link" href="acacia.php">
<img src="images/menu-produits-acacia-5-small.jpg" alt="produits B3D - acacia">
<div class="product-name">Acacia</div>
</a>

<a class="product-link" href="pin.php">
<img src="images/menu-produits-pin-1-small.jpg" alt="produits B3D - pin">
<div class="product-name">Pin</div>
</a>

<a class="product-link" href="chataignier.php">
<img src="images/menu-produits-chataignier-2-small.jpg" alt="produits B3D - chataignier">
<div class="product-name">Châtaignier</div>
</a>

<a class="product-link" href="bois-de-chauffe.php">
<img src="images/menu-produits-acacia-7-small.jpg" alt="produits B3D - bois de chauffe">
<div class="product-name">Bois de chauffage</div>
</a>
<!-- product-area-content --></div>
<!-- nav-panel --></div>
      </li>

      <li>
        <a href="contact.php">Contact</a>
      </li>
      <li id="notFlags">
        <a href="index.php">Langues</a>
        <ul>
          <li><a href="index.php">Français</a></li>
          <li><a href="index.php">English</a></li>
          <li><a href="index.php">Español</a></li>
          <li><a href="index.php">Deutsch</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="flags">
    <a href="index.php"><img src="images/FR.svg" alt="French Flag"></a>
    <a href="index.php"><img src="images/EN.svg" alt="English Flag"></a>
    <a href="index.php"><img src="images/ES.svg" alt="Español Flag"></a>
    <a href="index.php"><img src="images/DE.svg" alt="Deutsch Flag"></a>
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

    var mode = (screen.width < collapseBreakpoint) ? 'collapse' : 'expand';

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

    var currentPage = window.location.href.split('/').pop();

    var a = document.querySelector('a[href="' + currentPage + '"]');

    var topLI = a.closest('nav > ul > li');

    topLI.classList.add('active');

    topLI.querySelector('a').removeAttribute('href');
  }

</script>
