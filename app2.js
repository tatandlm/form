window.addEventListener('load', () => {
    const form = document.querySelector('#formulario')
    const usuario = document.getElementById('usuario')
    const apellidos = document.getElementById('apellidos')
    const email = document.getElementById('email')
    const pass = document.getElementById('pass')
    const passConfirma = document.getElementById('passConfirma')

    form.addEventListener('submit', (e) => {
        if (!validaCampos()) {
            e.preventDefault(); //stop form from submitting
            console.log('Detenemos');
        }
        console.log('Avanzamsos');
    })

    function validaCampos() {
        let validado = true;
        //capturar los valores ingresados por el usuario
        const usuarioValor = usuario.value.trim()
        const apellidosValor = apellidos.value.trim()
        const emailValor = email.value.trim()
        const passValor = pass.value.trim()
        const passConfirmaValor = passConfirma.value.trim()

        //validando campo usuario
        //(!usuarioValor) ? console.log('CAMPO VACIO') : console.log(usuarioValor)



        if (!usuarioValor) {
            //console.log('CAMPO VACIO')
            validaFalla(usuario, 'Campo obligatorio')
            validado = false;


        } else if (usuarioValor.length < 2) {
            validaFalla(usuario, 'Debe tener 2 y 50 caracteres')
            validado = false;

        } else if (usuarioValor.length > 50) {
            validaFalla(usuario, 'Debe tener entre 2 y 50 caracteres')
            validado = false;



        } else {
            validaOk(usuario)
        }


        if (!apellidosValor) {
            //console.log('CAMPO VACIO')
            validaFalla(apellidos, 'Campo obligatorio')
            validado = false;



        } else if (apellidosValor.length < 2) {
            validaFalla(apellidos, 'Debe tener 2 y 75 caracteres ')
            validado = false;

        } else if (apellidosValor.length > 75) {
            validaFalla(apellidos, 'Debe tener 2 y 75 caracteres ')
            validado = false;

        } else {
            validaOk(apellidos)
        }


        //validando campo email
        if (!emailValor) {
            validaFalla(email, 'Campo obligatorio')
            validado = false;
        } else if (!validaEmail(emailValor)) {
            validaFalla(email, 'El correo electronico no es válido')
            validado = false;
        } else {
            validaOk(email)
        }

        //validando campo password
        const er = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}$/
        if (!passValor) {
            validaFalla(pass, 'Campo obligatorio')
            validado = false;
        } else if (passValor.length < 8) {
            validaFalla(pass, 'Debe tener 8 caracteres cómo mínimo.')
            validado = false;

        } else if (passValor.length > 16) {
            validaFalla(pass, 'Debe tener 16 caracteres cómo maximo.')
            validado = false;

        } else if (!passValor.match(er)) {
            validaFalla(pass, 'Debe tener al menos una may., una min. y un núm.')
            validado = false;
        } else {
            validaOk(pass)
        }

        //validando campo password Confirmación
        if (!passConfirmaValor) {
            validaFalla(passConfirma, 'Confirme su contraseña')
            validado = false;
        } else if (passValor !== passConfirmaValor) {
            validaFalla(passConfirma, 'La contraseña no coincide')
            validado = false;
        } else {
            validaOk(passConfirma)
        }

        return validado;


    }

    const validaFalla = (input, msje) => {
        const formControl = input.parentElement
        const aviso = formControl.querySelector('p')
        aviso.innerText = msje

        formControl.className = 'form-control falla'
    }
    const validaOk = (input, msje) => {
        const formControl = input.parentElement
        formControl.className = 'form-control ok'
    }

    const validaEmail = (email) => {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }

    const validaUsuario = (usuario) => {
        return /^[^0-9\.\,\\\"\¿\?\¡\!\;\:\#\$\%\&\(\)\*\+\-\/\<\>\=\@\[\]\^_\{\}\|\~\€\°\`]+$/.test(usuario);
    }

})