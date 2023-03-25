window.onload = inicio

let videos = ['video2.mp4']
let velocidades = [ 1.25, 1.5, 2, 1, 0.25, 0.5, 0.75,]
let vid
let orden = []
let videoActual = 0
let velocidadActual = 1

function inicio() {
  vid = document.querySelector('video')
  vid.src = `./../../dist/videos/${videos[videoActual]}`
  vid.onclick = play
  document.querySelector('.play').onclick = play
  document.querySelector('.volumen').onclick = volumen
  document.querySelector('.siguiente').onclick = siguiente
  document.querySelector('.reiniciar').onclick = reiniciar
  document.querySelector('.reducir').onclick = reducir
  document.querySelector('.barra1').onclick = buscar
  document.querySelector('.velocidad').addEventListener('click', cambiarVelocidad);
  reordenar()
  vid.ontimeupdate = actualizar
  vid.onloadeddata = actualizar
  vid. onended = siguiente
  // Establecer la velocidad inicial del video y la etiqueta del botón de velocidad
  vid.playbackRate = velocidadActual;
  document.querySelector('.velocidad').textContent = `x${velocidadActual}`;
}

function play() {
  if (vid.paused) {
    vid.play()
    document.querySelector('.play').src = './../../dist/img/iconsVideo/pausa.svg'
  } else {
    vid.pause()
    document.querySelector('.play').src = './../../dist/img/iconsVideo/play.svg'
  }
}

function volumen() {
  vid.volume = !vid.volume
  document.querySelector('.volumen').src = `./../../dist/img/iconsVideo/volumen${vid.volume}.svg`
}

function reordenar() {
  for (const v of videos) {
    do {
      var azar = Math.floor(Math.random() * videos.length)
    } while (orden.indexOf(azar) >= 0) {
      orden.push(azar)
    }
  }
  reproducir()
}

function reproducir() {
  let videoToca = orden[videoActual]
  vid.src = `./../../dist/videos/${videos[videoToca]}`
  // vid.play() Juancho12
}

function siguiente() {
  videoActual++
  if (videoActual >= videos.length) {
    videoActual = 0
  }
  reproducir()
  vid.play()
}

function reiniciar() {
  vid.currentTime = 0
}

function reducir() {
  let sectionVideo = document.querySelector('.main-container-video')
  if (sectionVideo.style.transform == 'scale(0.5)') {
    sectionVideo.style.transform = 'scale(1)'
    document.querySelector('.reducir').src = `./../../dist/img/iconsVideo/reducir.svg`
  } else {
    sectionVideo.style.transform = 'scale(0.5)'
    document.querySelector('.reducir').src = `./../../dist/img/iconsVideo/ampliar.svg`
  }
}

function actualizar() {
  document.querySelector('.estado').innerHTML = 
  `${conversionTiempo(vid.currentTime)} / ${conversionTiempo(vid.duration)}`

  let porcentaje = (100 * vid.currentTime) / vid.duration
  document.querySelector('.barra2').style.width = `${porcentaje}%`

}

function conversionTiempo(segundos) {
  let fecha = new Date(segundos * 1000)
  let segundo = 
    (fecha.getSeconds() <= 9)
    ? '0' + fecha.getSeconds()
    : fecha.getSeconds()
  let minuto = 
    (fecha.getMinutes() <= 9)
    ? '0' + fecha.getMinutes()
    : fecha.getMinutes()
  return `${minuto}:${segundo}`
}


function buscar(evento) {
  let handleClick = evento.offsetX
  let anchoNevegador = document.querySelector('.barra1').offsetWidth
  let porcentaje = (100 * handleClick) / anchoNevegador
  let posicion = Math.floor(vid.duration * (porcentaje/100))
  vid.currentTime = posicion
}

function cambiarVelocidad() {
  // Encontrar el índice de la velocidad actual en el array de velocidades
  let indiceActual = velocidades.indexOf(velocidadActual);
  // Incrementar el índice para obtener la nueva velocidad
  let nuevoIndice = (indiceActual + 1) % velocidades.length;
  // Actualizar la velocidad del video y la etiqueta del botón
  velocidadActual = velocidades[nuevoIndice];
  vid.playbackRate = velocidadActual;
  document.querySelector('.velocidad').textContent = `x${velocidadActual}`;
}