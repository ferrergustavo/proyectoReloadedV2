  //-------------------------Boton Shop-----------------------------------//

  let show_sidebar = document.querySelector('.shop_Icon');
  let mySidebar = document.querySelector('.shop_display')
  let close_sidebar = document.querySelector('#imgXY');
  let container = document.querySelector('.slideshow');

  show_sidebar.addEventListener('click',showSidebar);
  close_sidebar.addEventListener('click',closeSidebar);
  show_sidebar.addEventListener('click',showSidebarLog);

  function showSidebar(){
      mySidebar.style.display = "block";
      container.style.opacity = "0.5";
      bodyRegistro.style.display='none';
      bodyLogin.style.display='none'; 
      containerBusqueda.style.display="none";
  }

  function closeSidebar(){
      mySidebar.style.display = "none";
      container.style.opacity = "1";
  }


  function showSidebarLog(){
      mySidebar.style.display = "block";
      containerBusqueda.style.display="none";
      containerProfile.style.display="none";
  }
