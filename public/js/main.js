var abrirVentana=document.getElementById('abrirVentana'),
    cerrarVentana=document.getElementById('cerrar'),
    fondoVentana=document.getElementById('fondo_ventana');

    abrirVentana.addEventListener('click', function(){
       fondoVentana.classList.add('active')
    });
    cerrarVentana.addEventListener('click', function(){
        fondoVentana.classList.remove('active')
     });
