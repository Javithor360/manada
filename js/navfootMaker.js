function navfootMaker() {

/*
    ---------------------------
        ACLARACIONES DE USO
    ----------------------------

    1. SE TIENE QUE QUITAR LA ESTRUCTURA HTML DEL NAVBAR Y FOOTER
    2. PARA EL NAVBAR SE DEBE CREAR UN DIV VACÍO DEBADO DEL <BODY> CON LA #ID "NAVY"
    3. PARA EL FOOTER SE DEBE CREAR UN DIV DEJABO DE TODO EL CONTENIDO CON LA #ID "FOOT"
    4. SE DEBE LLAMAR ESTE ARCHIVO.JS DONDE TAMBIÉN SE LLAMA AL CSS Y FAVICON CON <SCRIPT SRC="..."></SCRIPT>

*/



    // - - - - - - - - - - - - - - - - - - - - - - - - //
    //                                                 //
    //                  Creación navbar                //
    //                                                 //
    // - - - - - - - - - - - - - - - - - - - - - - - - //

    let longpath = '';
    if(location.pathname.startsWith('/pets')){ longpath = '../../'; }
    else if(location.pathname.startsWith('/guides')){ longpath = '../' }
    else{ longpath = './'}
    let navbar;
/*
    if(login == false){
*/

    // Verificamos si estamos en el index ya que acá el navbar es diferente.
    if(location.pathname == '/index.html'){
        // Identificamos el div que almacenará el navbar entero e introducimos su contenido.
        navbar = document.getElementById('navyIndex');
        navbar.innerHTML = 	'<header id="logo">'+
                                '<img src="'+ longpath +'src/logos/logo_full.svg" width="366px" height="120px">'+
                            '</header>'+
                            '<div class="navbar">'+
                                '<nav>'+
                                    '<div class="menu">'+
                                        '<div class="menucontent">'+
                                            '<a href="'+ longpath +'pets.html">Mascotas</a>'+
                                            '<p>|</p>'+
                                            '<a href="'+ longpath +'guides.html">¿Cómo Adoptar?</a>'+
                                            '<p>|</p>'+
                                            '<a href="'+ longpath +'contact.html">Contacto</a>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="user">'+
                                        '<a href="'+ longpath +'form_login.html">'+
                                            '<button class="login">'+
                                                'Iniciar Sesión'+
                                            '</button>'+
                                        '</a>'+
                                    '</div>'+
                                '</nav>'+
                            '</div>'
    }else{
        // Sino estamos en el index, procedemos a crear el navbar estándar
        navbar = document.getElementById('navy');
        navbar.innerHTML =  '<header>'+
                                '<nav>'+
                                    '<div class="menu">'+
                                        '<div class="logo">'+
                                            '<a href="'+ longpath +'index.html"><img src="'+ longpath +'src/logos/logo_circle_full.svg" alt=""></a>'+
                                        '</div>'+
                                        '<div class="menucontent">'+
                                            '<a href="'+ longpath +'index.html">Inicio</a>'+
                                            '<p>|</p>'+
                                            '<a href="'+ longpath +'pets.html">Mascotas</a>'+
                                            '<p>|</p>'+
                                            '<a href="'+ longpath +'guides.html">¿Cómo Adoptar?</a>'+
                                            '<p>|</p>'+
                                            '<a href="'+ longpath +'contact.html">Contacto</a>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="user">'+
                                        '<a href="'+ longpath +'form_login.html">'+
                                            '<button class="login">'+
                                                'Iniciar Sesión'+
                                            '</button>'+
                                        '</a>'+
                                    '</div>'+
                                '</nav>'+
                            '</header>'
    }
/*
    }else{
        // FOOTER CUANDO INICIA SESIÓN (aunque el q cambia es el navbar pero es lo mismo xd)
    }
*/



    // - - - - - - - - - - - - - - - - - - - - - - - - //
    //                                                 //
    //                  Creación footer                //
    //                                                 //
    // - - - - - - - - - - - - - - - - - - - - - - - - //

    let footer =  document.getElementById('foot'); // Se obtiene el div que contiene todo el footer y luego se introduce todo el contenido.
    footer.innerHTML =  '<footer>'+
                            '<div class="container_footer">'+
                                '<h2>Fundación La Manada © 2021'+
                                    '<a href="https://www.instagram.com/la.manadasv/"target="blank"><img id="img_footer" src="'+ longpath +'src/icons/instagram.svg" width="40px" height="40px"></a>'+
                                    '<a href="https://www.facebook.com/profile.php?id=100070244422672" target="blank"><img id="img_footer" src="'+ longpath +'src/icons/facebook.svg" width="40px" height="40px"></a>'+
                                '</h2>'+
                                '<hr>'+
                                '<h5>Diseñado por Grupo 8</h5>'+
                            '</div>'+
                        '</footer>';
}

window.onload = navfootMaker;