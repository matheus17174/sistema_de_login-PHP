function validaNome (){
    var doc = document.getElementById("nome").value;
    console.log(doc);
    if(doc == ""){
        return false;
    }else{
        return true;
    }
    

}

function validarSenha() {
    var senha1 = document.getElementById("senha");
    var senha2 = document.getElementById("senhaTmp");
    var s1 = senha1.value;
    var s2 = senha2.value;
    if (s1 == s2) {
        return true;
    } else {
        return false
    }
}


function TestaCPF() {
    var strCPF = document.getElementById("cpf").value;
    strCPF = strCPF.split(".");
    var cpf = strCPF[2].split("-");
    strCPF = strCPF[0]+strCPF[1]+cpf[0]+cpf[1];
    var Soma;
    var Resto;
    Soma = 0;
  if (strCPF == "00000000000") return false;
     
  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
   
  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;

    
}

function validar(){

    if(!validaNome()){
        alert('nome invalido');
        document.getElementById("nome").focus();
    }
        
    if(!validarSenha()){
        alert('senha invalida');
        document.getElementById("senha").focus();
    } 
    
    if(!TestaCPF()){
        alert('cpf invalido');
        document.getElementById("cpf").focus();
    } 
    
    vetor();
    
}

function vetor() {
    var vetor = document.getElementById("sexo");
    var opcSelect = document.getElementById("sexo").value;
    for (var i = 1; i < vetor.length; i++) {
        if (opcSelect == vetor[i].value) {
            alert("vc selecionou a opc: " + vetor[i].value);
        } else {
            console.log("Array => "+vetor[i].value);
        }
    }
}
function mCPF(cpf){
    if(cpf.length == 3) {
        document.getElementById("cpf").value = cpf + ".";
    }else if(cpf.length == 7) {
        document.getElementById("cpf").value = cpf + ".";
    } else if(cpf.length == 11) {
        document.getElementById("cpf").value = cpf + "-";
    }
}

    function mCEP(cep){
        if (cep.length == 5){ 
            document.getElementById("cep").value = cep + "-";
        }
    }

    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value=("");
        document.getElementById('bairro').value=("");
        document.getElementById('cidade').value=("");
        document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep() {
        //Nova variável "cep" somente com dígitos.
        var valor = document.getElementById('cep').value;
        console.log(valor);
        var cep = valor.replace("-", '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
