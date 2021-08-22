//asignar clase table
var tables = document.getElementsByTagName('table')

for (let i = 0; i < tables.length; i++) {
    tables[i].classList.add('table')
    tables[i].classList.add('table-striped')
    tables[i].classList.add('table-hover')
    tables[i].classList.add('mb-5')
}

//informacion de alumno
var table = document.getElementsByTagName('table')[1]

//nombre
var tr = table.getElementsByTagName("tr")[2]
var td = tr.getElementsByTagName("td")[1]
var nombre = td.innerText

//apellido 1
var tr = table.getElementsByTagName("tr")[3]
var td = tr.getElementsByTagName("td")[1]
var apellido1 = td.innerText

//apellido 2
var tr = table.getElementsByTagName("tr")[4]
var td = tr.getElementsByTagName("td")[1]
var apellido2 = td.innerText

//matrícula
var tr = table.getElementsByTagName("tr")[1]
var td = tr.getElementsByTagName("td")[1]
var matricula = td.innerText

//carrera
var tr = table.getElementsByTagName("tr")[11]
var td = tr.getElementsByTagName("td")[1]
var carrera = td.innerText

//grupo
var tr = table.getElementsByTagName("tr")[12]
var td = tr.getElementsByTagName("td")[3]
var grupo = td.innerText

document.getElementById('nombre').textContent = `${nombre} ${apellido1} ${apellido2}`
document.getElementById('matricula').textContent = matricula
document.getElementById('carrera').textContent = carrera
document.getElementById('grupo').textContent = grupo

//calificaciones
var contenidoCalificaciones = document.getElementsByTagName('table')[2].innerHTML
var calificaciones = document.getElementById('calificaciones') 
calificaciones.innerHTML = contenidoCalificaciones
var elements = calificaciones.getElementsByTagName('table')
calificaciones.removeChild(elements[0])