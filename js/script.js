const imagenes = document.querySelectorAll('.imagen');
const indicadores = document.querySelectorAll('.indicador');

let indiceActivo = 0;

function mostrarImagen(indice) {
  imagenes.forEach(imagen => imagen.style.display = 'none');
  imagenes[indice].style.display = 'block';

  indicadores.forEach(indicador => indicador.classList.remove('active'));
  indicadores[indice].classList.add('active');
}

mostrarImagen(indiceActivo);

setInterval(() => {
  indiceActivo = (indiceActivo + 1) % imagenes.length;
  mostrarImagen(indiceActivo);
}, 5000); // 5 segundos por imagen
