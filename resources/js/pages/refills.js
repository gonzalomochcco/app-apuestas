document.getElementById('btn-guardar-editar-recarga').addEventListener('click', (e) => {

    const form = document.getElementById('form-guardar-editar-recarga');
    const ruta = form.getAttribute("action");    
    const data = new FormData(form);

    fetch( ruta , {
        method: 'POST', 
        headers: {
            //'Content-Type': 'multipart/form-data',
            'Accept': "application/json",
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        body: data
    })
    .then((response) => response.json())
    .then((data) => {        
        
        if (data.success) {
                        
            const validados = document.querySelectorAll(".is-invalid")
            validados.forEach(element => {
                element.classList.remove("is-invalid")
            });               
            
            document.getElementById("mensaje-confirmacion").classList.remove("d-none")
            document.getElementById("btn-guardar-editar-recarga").classList.add("d-none")
            document.getElementById("btn-cancelar-continuar").classList.remove("btn-outline-danger")
            document.getElementById("btn-cancelar-continuar").classList.add("btn-outline-primary")
            document.getElementById("btn-cancelar-continuar").innerHTML = "Continuar"
        
        }{
            if(data.message === "validacion"){

                Object.entries(data.data).forEach( (el) => {   

                    const nombre_input = el[0];
                    const input = document.getElementsByName(nombre_input)[0];                                                
                    input.classList.add('is-invalid');
                        input.nextElementSibling.innerHTML = el[1]                           
                    
                });

            }else{

                console.log( data.message );

            }
            
        }

    })
    .catch(
        error => this.setState({error, isLoading: false})
    );
  
});

document.getElementById("btn-cancelar-continuar").addEventListener("click" , (e) => {

    location.reload();

})

document.getElementById("btn-nueva-recarga").addEventListener("click", (e) => {
    
    document.getElementById("tituloModal").innerHTML = "Registrar Nueva Recarga"

})

window.editarMontoRecarga = function( event , numop , amount){

    console.log(numop);
    document.getElementById("mdleditar_numoperacion").value = numop;
    document.getElementById("mdleditar_amount").value = amount;

}