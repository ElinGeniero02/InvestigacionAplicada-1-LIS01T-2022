//Con este codigo se evita que luego de haber enviado los datos desde el form al recargar la pagina se vuelva a enviar
//con este codigo se reestablece el estado de la pagina
if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
}