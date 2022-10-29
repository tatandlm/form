window.addEventListener('load', function() {
    const form = document.querySelector('#formulario')

    const usuario = document.getElementById('email')
    const pass = document.getElementById('pass')


    form.addEventListener('submit', (e) => {
        if (!validaCampos()) {
            e.preventDefault(); //stop form from submitting
            console.log('Detenemos');
        }
        console.log('Avanzamsos');
    });

    const validaCampos = () => {
        let validado = true;
        //capturar los valores ingresados por el usuario
        const emailValor = email.value.trim()
        const passValor = pass.value.trim()
            //validando campo email
        if (!emailValor) {
            validaFalla(email, 'Campo obligatorio')
            validado = false;
        } else if (!validaEmail(emailValor)) {
            validaFalla(email, 'El Correo Electronico no es válido')
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
            validaFalla(pass, 'Debe tener 8 y 16 caracteres')
            validado = false;

        } else if (passValor.length > 16) {
            validaFalla(pass, 'Debe tener 8 y 16 caracteres')
            validado = false;

        } else if (!passValor.match(er)) {
            validaFalla(pass, 'Debe tener al menos una may., una min. y un núm. y caract')
            validado = false;
        } else {
            validaOk(pass)
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
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)
    }

    function validateOnlyText(value) {
        var expresion =
            /^[^0-9\.\,\\\"\¿\?\¡\!\;\:\#\$\%\&\(\)\*\+\-\/\<\>\=\@\[\]\^_\{\}\|\~\€\°\`]+$/;
        return !(value.length === 0 || !value.trim() || !expresion.test(value));
    }

    function validateEmail(value) {
        var expresion =
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return expresion.test(value);
    }

})