window.addEventListener('load', function() {

  var navToggle = document.querySelector('nav.sauge .nav-toggle');

  var navList = document.querySelector('nav.sauge > ul');

  navToggle.addEventListener('click', function() {

    if(!navList.style.display) {

      navList.style.display = 'block';
    }
    else { navList.removeAttribute('style'); }
  });

  var collapseBreakpoint = 992;

  var mode = (screen.width < collapseBreakpoint) ? 'collapse' : 'expand';

  window.addEventListener('resize', function() {

    if(mode === 'collapse' && screen.width >= collapseBreakpoint) {

      navList.removeAttribute('style');

      mode = 'expand';
    }
    else if(mode === 'expand' && screen.width < collapseBreakpoint) {

      mode = 'collapse';
    }
  });
});
