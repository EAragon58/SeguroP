document.addEventListener('DOMContentLoaded', function() {
    const mostrarVentanaBtn = document.getElementById('mostrarVentana');
    const ventanaFlotante = document.getElementById('ventanaFlotante');
    const cerrarVentanaBtn = document.getElementById('cerrarVentana');
  
    mostrarVentanaBtn.addEventListener('click', function() {
      ventanaFlotante.style.display = 'block';
    });
  
    cerrarVentanaBtn.addEventListener('click', function() {
      ventanaFlotante.style.display = 'none';
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const mostrarVentanaBtn = document.getElementById('mostrarModificar');
    const ventanamodificar = document.getElementById('ventanamodificar');
    const cerrarVentanaBtn = document.getElementById('cerrarVentanaM');
  
    mostrarVentanaBtn.addEventListener('click', function() {
      ventanamodificar.style.display = 'block';
    });
  
    cerrarVentanaBtn.addEventListener('click', function() {
      ventanamodificar.style.display = 'none';
    });
  });


  document.addEventListener('DOMContentLoaded', function() {
    const mostrarVentanaBtn = document.getElementById('mostrarEliminar');
    const ventanaeliminar = document.getElementById('ventanaeliminar');
    const cerrarVentanaBtn = document.getElementById('cerrarVentanaE');
  
    mostrarVentanaBtn.addEventListener('click', function() {
      ventanaeliminar.style.display = 'block';
    });
  
    cerrarVentanaBtn.addEventListener('click', function() {
      ventanaeliminar.style.display = 'none';
    });
  });