 // Suponha que você tenha obtido a resposta de alguma forma
 var resposta = "Sim"; // Aqui você deve usar o valor real da resposta

 // Obtenha o elemento que contém a resposta pelo seu id
 var respostaElemento = document.getElementById("resposta");

 // Verifique o valor da resposta e altere o estilo do elemento com base nela
 if (resposta === "Sim") {
     respostaElemento.style.color = "green";
 } else {
     respostaElemento.style.color = "red";
 }



function cor();
