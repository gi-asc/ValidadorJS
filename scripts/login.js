let mailUser = document.getElementById('emailLogin');
let senhaUser = document.getElementById('senhaLogin');
let botaoLogin = document.getElementById('enviarLogin');

let elementosLogin = new Array;
elementosLogin[0] = mailUser;
elementosLogin[1] = senhaUser;

let expsLogin = new Array;
expsLogin[0] = function(){return /^[\w\.-_\+]+@[\w-]+(\.\w{2,4})+$/};
expsLogin[1] = function(){return /^(?=.*[a-z])(?=.*[0-9])[a-z0-9]{6,8}$/i};

let tudoValido = function(){
    let cont=0;
    for(let i=0; i<elementosLogin.length; i++){
if(!(elementosLogin[i].classList.contains('valido'))){
    cont++;
}
    }
    if(cont == 0){
        botaoLogin.removeAttribute('disabled');
    }
}

let textosLogin = new Array;
textosLogin[0] = "Formato de email inválido.";
textosLogin[1] = "Formato de senha inválido.";

let verifyLogin = function(item, index){
    let textoAtual = textosLogin[index];
    let idAtual = String('campolog'+index);
    let spanAviso = document.createElement('span');
spanAviso.setAttribute('id', idAtual);
spanAviso.innerText = textoAtual;
    let pai = item.parentElement;
    item.addEventListener('blur', function(){
        let expression = expsLogin[index]();
        let filhos = Array.from(pai.children);
        if(expression.test(this.value)){
            if(this.classList.contains('invalido')){
                this.classList.remove('invalido')
            }
            this.classList.add('valido');
            if(filhos.includes(document.getElementById(idAtual))){
                document.getElementById(idAtual).remove();
            }
        }else{
            if(this.classList.contains('valido')){
                this.classList.remove('valido')
            }
            this.classList.add('invalido');
            if(!(filhos.includes(document.getElementById(idAtual)))){
                pai.appendChild(spanAviso);
            }
        }
        return tudoValido();
    })
}
elementosLogin.forEach(verifyLogin);