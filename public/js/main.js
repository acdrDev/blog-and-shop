var abrir=document.getElementById("open");
var cerrar=document.getElementById("close");
var windowBackground=document.getElementById("windowBackground");
var window=document.getElementById("newWindow");

abrir.addEventListener("click", ()=> {
 
   windowBackground.classList.add('window_background--active'),
   window.classList.add('window--actives')
});
cerrar.addEventListener("click", () => {

   windowBackground.classList.remove('window_background--active'),
   window.classList.remove('window--actives')
});