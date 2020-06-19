function Pesquisar(){
    var coluna = "2";
    var Filtrar, Tabela, tr, th, td, i ;

    Filtrar = document.getElementById("buasca");
    Filtrar = Filtrar.value.toUpperCase();

    Tabela = document.getElementById("table");
    
    tr= document.getElementsByTagName("tr");

    th = document.getElementsByName("th");

    for(i = 0; i< tr.length; i++){
        td = tr [i].getElementsByTagName("td")[coluna];
        if(td){
            if(td.innerHTML.toUpperCase().indexOf(Filtrar) > -1){
                tr[i].style.display="";
            }else{
                tr[i].style.display="none";
            }
        }
    }
}

document.getElementById('btn').addEventListener("click",Pesquisar);