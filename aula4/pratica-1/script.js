var resultado = 0;

function getOperador() {
    operador = document.getElementById('operador').value;
}

function getValCampos() {
    valUm = parseFloat(document.getElementById('valorUm').value);
    valDois = parseFloat(document.getElementById('valorDois').value);
    campoResultado = document.getElementById('resultado');
}

function getAlerta() {
    alerta = document.querySelector('.alert');
}

function validaInput(a) {
    const campo = document.getElementById(a);
    if (campo.value == '') {
        campo.classList.add("vazio");
    } else {
        campo.classList.remove("vazio");
    }

}

function validaSelect(a) {
    const campo = document.getElementById(a);
    if (campo.value == 'nenhum') {
        campo.classList.add("vazio");
    } else {
        campo.classList.remove("vazio");
    }
}

function calcula() {

    getOperador();
    getValCampos();
    getAlerta();
    validaInput('valorUm');
    validaInput('valorDois');
    validaSelect('operador');

    campoResultado.value = '';
    campoResultado.style.backgroundColor = 'white';

    if (!isNaN(valUm) && !isNaN(valDois) && operador !== 'nenhum') {

        if (operador == '+') {
            resultado = (valUm + valDois);
        } else if (operador == '-') {
            resultado = (valUm - valDois);
        } else if (operador == '*') {
            resultado = (valUm * valDois);
        } else if (operador == '/') {
            resultado = (valUm / valDois);
        }
        campoResultado.value = resultado.toFixed(2);

        if (Number(campoResultado.value) > 0) {
            campoResultado.style.backgroundColor = "green";
        } else if (Number(campoResultado.value) < 0) {
            campoResultado.style.backgroundColor = "red";
        } else {
            campoResultado.style.backgroundColor = "gray";
        }
    }

    if (campoResultado.value == '' || operador == 'nenhum') {
        alerta.style.display = 'flex';
    } else {
        alerta.style.display = 'none';
    }

}


