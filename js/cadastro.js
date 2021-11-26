function validar(){
    // só permitirá o envio se os dados forem fornecidos
    if(document.cadastro.usuario.value == ""){
      alert("Forneça o nome do usuário");
      document.cadastro.usuario.focus();
      return false;
    }
    else if(document.cadastro.senha.value == ""){
      alert("Forneça a senha do usuário");
      document.cadastro.senha.focus();
      return false;
    }
    else if(document.cadastro.senha2.value == ""){
        alert("Forneça a senha do usuário");
        document.cadastro.senha2.focus();
        return false;
    }
    else{
      return true;
    }
  }

