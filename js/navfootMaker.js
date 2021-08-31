window.onload = navfootMaker;

function navfootMaker() {

    let longpath = '';
    if(location.pathname.includes('/pets/')){ longpath = '../../'; }
    else if(location.pathname.includes('/guides/')){ longpath = '../';}
    else if(location.pathname.includes('/php/')){ longpath = '../';}  
    else{ longpath = './'};
    let navbar, login;

    if(window.session == true){
        login =    '<div class="user">'+
                        '<a href="'+ longpath +'php/logout.php">'+
                            '<button class="login">'+
                                'Cerrar Sesión'+
                            '</button>'+
                        '</a>'+
                    '</div>';
    }else{
        login =    '<div class="user">'+
                        '<a href="'+ longpath +'php/login.php">'+
                            '<button class="login">'+
                                'Iniciar sesión'+
                            '</button>'+
                        '</a>'+
                    '</div>';       
    }
    
    if(location.pathname.includes('/index') || location.pathname.includes('/principal')){
        
        navbar = document.getElementById('navyIndex');
        navbar.innerHTML += '<header id="logo">'+
                                '<img src="'+ longpath +'src/logos/logo_full.svg" width="366px" height="120px">'+
                            '</header>'+
                            '<div class="navbar">'+
                                '<nav>'+
                                    '<div class="menu">'+
                                        '<div class="menucontent">'+
                                            '<a href="'+ longpath +'pets.php">Mascotas</a>'+
                                            '<p>|</p>'+
                                            '<a href="'+ longpath +'guides.php">¿Cómo Adoptar?</a>'+
                                            '<p>|</p>'+
                                            '<a href="'+ longpath +'contact.php">Contacto</a>'+
                                        '</div>'+
                                    '</div>'+
                                    login+
                                '</nav>'+
                            '</div>'
    } else{
        
        navbar = document.getElementById('navy');
        navbar.innerHTML =  '<header>'+
                                '<nav>'+
                                    '<div class="menu">'+
                                        '<div class="logo">'+
                                            '<a href="'+ longpath +'index.php"><img src="'+ longpath +'src/logos/logo_circle_full.svg" alt=""></a>'+
                                        '</div>'+
                                        '<div class="menucontent">'+
                                            '<a href="'+ longpath +'php/index.php">Inicio</a>'+
                                            '<p>|</p>'+
                                            '<a href="'+ longpath +'pets.php">Mascotas</a>'+
                                            '<p>|</p>'+
                                            '<a href="'+ longpath +'guides.php">¿Cómo Adoptar?</a>'+
                                            '<p>|</p>'+
                                            '<a href="'+ longpath +'contact.php">Contacto</a>'+
                                        '</div>'+
                                    '</div>'+
                                    login+
                                '</nav>'+
                            '</header>'
    }

    let footer =  document.getElementById('foot');
    footer.innerHTML =  '<footer>'+
                            '<div class="container_footer">'+
                                '<h3>Fundación: La Manada</h3>'+
                                '<p>"Respetar a los animales es una obligación, amarlos es un privilegio"</p>'+
                                '<ul class="redes">'+
                                    '<li><a href="https://www.instagram.com/la.manadasv/"target="blank"><img id="img_footer" src="'+ longpath +'src/icons/instagram.svg" width="40px" height="40px"></a></li>'+
                                    '<li><a href="https://www.facebook.com/profile.php?id=100070244422672"target="blank"><img id="img_footer" src="'+ longpath +'src/icons/facebook.svg" width="40px" height="40px"></a></li>'+
                                '</ul>'+
                            '</div>'+
                            '<div class="footer_bottom">'+
                                '<p>Copyright &copy;2021 Fundación: La Manada. <span>by Grupo 8</span></p>'+
                            '</div>'+
                        '</footer>';
}