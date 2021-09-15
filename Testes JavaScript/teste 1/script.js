var namname = document.getElementById("namname").style.marginTop = "323px";
function mouseOn(){
    if(namname == "323px"){
        var a = document.getElementById("namname").style.marginTop = "305px";
        var b = document.getElementById("namname").style.transition = "0.2s";
    }
}
function mouseOff(){
    if(namname == "305px"){
        var c = document.getElementById("namname").style.marginTop = "323px";
        var d = document.getElementById("namname").style.transition = "0.2s";
    }
}
