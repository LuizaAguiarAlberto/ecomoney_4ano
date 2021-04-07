acu = true;
document.getElementById('arrimo').onclick = displayArrimo;

function displayArrimo(){
    if(acu){
        document.getElementById("renda_familiar").innerHTML = '<label for="renda_familiar">Renda familiar:</label><div class="input-group"><div class="input-group-prepend"><span class="input-group-text">R$</span></div><input type="number" name="renda_familiar" class="form-control" min="1" required></div>';
        acu = false;
    }
    else{
        document.getElementById("renda_familiar").innerHTML = '';
        acu = true;
    }
}

//$('#meucarrossel').carousel({
    //interval: false
//});
