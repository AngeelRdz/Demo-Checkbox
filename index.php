<script>
function checar(){
    if (boton.disabled == false){
        boton.disabled = true;
    }else{
        boton.disabled = false;
    }
}
</script>
<form>
<input type="checkbox" onchange="javascript:checar()" />
<input type="button" id="boton" value="Aceptar" disabled/>
</form>
