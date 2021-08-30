window.onload = navfootMaker;

function navfootMaker() {

    let longpath = '';
    if(location.pathname.includes('/pets/')){ longpath = '../../'; }
    else if(location.pathname.includes('/guides/')){ longpath = '../' }
    else{ longpath = './'};
    let navbar;

    if(location.pathname.includes('/index.html')){
        
        navbar = document.getElementById('navyIndex');
        navbar.innerHTML = '<header id="logo">'+
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
    } else{
        
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