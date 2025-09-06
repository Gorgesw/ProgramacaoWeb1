const login = 'kaue';
const senha = 123;

function bordaVermelha(campo) {
    campo.style.borderColor = ('red');
}

function alerta() {
    let getlogin = document.getElementById('login');
    let getsenha = document.getElementById('senha');

    if (getlogin.value == login && getsenha.value == senha) {
        window.alert('Login efetuado com Sucesso!');

    } else {
        window.alert('Login ou Senha incorreta, tente Novamente!');
        bordaVermelha(getlogin);
        bordaVermelha(getsenha);
    }

}
