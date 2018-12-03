window.onload = function(){


    var buscar = document.querySelector(".buscar");
    buscar.addEventListener('click', buscarDato);

    function palabra(string) {
    return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
    }

    function buscarDato() {
        
        var dato = document.querySelector(".dato");
        var value = dato.value;
        
        var ajaxCall = new XMLHttpRequest();        

        ajaxCall.onreadystatechange = function (){
        if(ajaxCall.readyState === 4 && ajaxCall.status === 200) {
        const respuesta = JSON.parse(ajaxCall.response);
                
        var find = false
        respuesta.forEach(ele => {
            if(ele['nombre'] === palabra(value)){
                find = true;
               window.location.href= "/tipo/" + ele['id'];
            }        
        });
            if(!find){
                window.location.href= "/shop";
                alert("No se ha encontrado su producto");
            }
    
        }
    }

        ajaxCall.open(
            'GET',
            '/buscar/tipo',
            true
           )
        ajaxCall.send();

            

        
    
        
      
    
    }
   
    

    
}