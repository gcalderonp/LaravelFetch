let formulario = document.getElementById('clienteForm');
let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
let ruta = formulario.getAttribute('action')

formulario.addEventListener('submit', async e => {
    e.preventDefault()
    let datos = new FormData(formulario)

    let data = {
        'name': datos.get('name'),
        'age': datos.get('age')
    }
    console.log(data)
    try {

        const res = await fetch('http://127.0.0.1:8000/'+ruta, {
            method: 'PUT',
            mode: 'cors',
            headers: {
                'X-CSRF-TOKEN': token,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        const resp = await res.json()
        // console.log(resp)
        alerta(resp)
    } catch (e) {
        console.log(e)
    }

})

function alerta(mensaje) {

    const alert = document.getElementById('alert')
    alert.classList.add('alert', 'alert-' + mensaje[2], 'w-25', 'text-center', 'mt-3', 'm-auto')
    alert.setAttribute('role', 'alert')
    alert.innerHTML = mensaje[1]

}
