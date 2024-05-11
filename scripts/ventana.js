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