function validar(){
  // só permitirá o envio se os dados forem fornecidos
  if(document.login.usuario.value == ""){
    alert("Forneça o nome do usuário");
    document.login.usuario.focus();
    return false;
  }
  else if(document.login.senha.value == ""){
    alert("Forneça a senha do usuário");
    document.login.senha.focus();
    return false;
  }
  else{
    return true;
  }
}