let nome = document.getElementById('nome');
let email = document.getElementById('email');
let senha = document.getElementById('senha');
let repeteSenha = document.getElementById('repeteSenha');
let botao = document.getElementById('enviar');


let elementosArray = new Array;
elementosArray[0] = nome;
elementosArray[1] = email;
elementosArray[2] = senha;
elementosArray[3] = repeteSenha;

let tudoValido = function(){
    let cont=0;
    for(let i=0; i<elementosArray.length; i++){
if(!(elementosArray[i].classList.contains('valido'))){
    cont++;
}
    }
    if(cont == 0){
        botao.removeAttribute('disabled');
    }
}
let expAtual;
let expReg = function(exp){
expAtual = new RegExp(exp);
return expAtual;
}
let expsArray = new Array();
expsArray[0] = function(){return /^(([a-z]{4,10}){1}\s+[a-z]+)+/i;};
expsArray[1] = function(){return /^[\w\.-_\+]+@[\w-]+(\.\w{2,4})+$/};
expsArray[2] = function(){return /^(?=.*[a-z])(?=.*[0-9])[a-z0-9]{6,8}$/i};
expsArray[3] = function(){
    let senhaAtual = "^" + document.getElementById('senha').value + "$";
    let expRep = new RegExp(senhaAtual);
return expRep;
}

let textosArray = new Array();
textosArray[0] = 'Nome inválido! o nome deve conter somente letras, ao menos 1 sobrenome, e no máximo 3.';
textosArray[1] = 'Formato inválido de email!';
textosArray[2] = 'Senha inválida! Por favor, siga o padrão indicado!';
textosArray[3] = 'As senhas não coincidem!';

let validarCampo = function(item, index, art){
    let textoAtual = textosArray[index];
    let idAtual = String('campo'+index);
    let spanAviso = document.createElement('span');
spanAviso.setAttribute('id', idAtual);
spanAviso.innerText = textoAtual;
    let pai = item.parentElement;

item.addEventListener('blur', function(){
    let expression = expsArray[index]();
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
elementosArray.forEach(validarCampo);