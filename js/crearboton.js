window.onload = crearboton;

function crearboton(){
    
    if(location.pathname.includes('/pets/')){ longpath = '../../'; }
    if(window.session == true){
        login =   
                        '<a href="../../adopt_form.php">'+
                            '<button class="boton">'+
                                'Adoptar'+
                            '</button>'+
                        '</a>'+
                    '</div>';
    }else{
        login =        '<a href="'+ longpath +'php/login.php">'+
                            '<button class="boton">'+
                                'Iniciar sesion para Adoptar'+
                            '</button>'+
                        '</a>'+
                    '</div>';       
    }
    
 
    document.getElementById('boton').innerHTML +=login;
}
