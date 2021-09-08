window.onload = navfootMaker;

function navfootMaker() {

    let longpath = ``;
    if(location.pathname.includes(`/pets/`)){ longpath = `../../`; }
    else if(location.pathname.includes(`/guides/`)){ longpath = `../`;}
    else if(location.pathname.includes(`/php/`)){ longpath = `../`;}  
    else{ longpath = `./`};
    let navbar, login;

    if(window.navfoot.session == true){
        login =    `<div class="user-menu-container">`+
                        `<label for="btn" class="button">`+
                            window.navfoot.username+
                            `<img src="`+ longpath +`src/icons/down-arrow-icon.svg" alt="">`+
                        `</label>`+
                        `<input type="checkbox" id="btn">`+
                        `<ul class="list">`+
                            `<li>`+
                                `<a href="`+ longpath +`myaccount.php">`+
                                    `<label>Mi cuenta`+
                                        `<img  src="`+ longpath +`src/icons/userIcon.svg" width="25px" alt="">`+
                                    `</label>`+
                                `</a>`+
                            `</li>`+
                            `<li  id="bottom">`+
                                    `<a href="`+ longpath +`php/logout.php">`+
                                    `<label>Cerrar sesión`+
                                        `<img  src="`+ longpath +`src/icons/logout-icon.svg" alt="">`+
                                    `</label>`+
                                `</a>`+
                            `</li>`+
                        `</ul>`+
                    `</div>`
    }else{
        login =    `<div class="user">`+
                        `<a href="`+ longpath +`php/login.php">`+
                            `<button class="login">`+
                                window.navfoot.navbar.login+
                            `</button>`+
                        `</a>`+
                    `</div>`;       
    }
    
    if(location.pathname.includes(`/index`) || location.pathname.includes(`/principal`)){
        
        navbar = document.getElementById(`navyIndex`);
        navbar.innerHTML += 
                            `<div class="navbar">`+
                                `<nav>`+
                                    `<div class="menu">`+
                                        `<div class="menucontent">`+
                                            `<a href="`+ longpath +`pets.php">${window.navfoot.navbar.pets}</a>`+
                                            `<p>|</p>`+
                                            `<a href="`+ longpath +`guides.php">${window.navfoot.navbar.howAdopt}</a>`+
                                            `<p>|</p>`+
                                            `<a href="`+ longpath +`contact.php">${window.navfoot.navbar.contact}</a>`+
                                        `</div>`+
                                    `</div>`+
                                    login+
                                `</nav>`+
                            `</div>`
    } else{
        
        navbar = document.getElementById(`navy`);
        navbar.innerHTML =  `<header>`+
                                `<nav>`+
                                    `<div class="menu">`+
                                        `<div class="logo">`+
                                            `<a href="`+ longpath +`index.php"><img src="`+ longpath +`src/logos/logo_circle_full.svg" alt=""></a>`+
                                        `</div>`+
                                        `<div class="menucontent">`+
                                            `<a href="`+ longpath +`php/index.php">${window.navfoot.navbar.home}</a>`+
                                            `<p>|</p>`+
                                            `<a href="`+ longpath +`pets.php">${window.navfoot.navbar.pets}</a>`+
                                            `<p>|</p>`+
                                            `<a href="`+ longpath +`guides.php">${window.navfoot.navbar.howAdopt}</a>`+
                                            `<p>|</p>`+
                                            `<a href="`+ longpath +`contact.php">${window.navfoot.navbar.contact}</a>`+
                                        `</div>`+
                                    `</div>`+
                                    login+
                                `</nav>`+
                            `</header>`
    }

/*     var opc;

    if(window.lang == undefined){
        opc =   `<option value="es">Español</option>`+
                `<option value="en">Inglés</option>`;
        window.lang = `es`;
    }else{
        if(window.lang == `es`){
            opc =   `<option value="es">Español</option>`+
                    `<option value="en">Inglés</option>`; 
        }else{
            opc =   `<option value="en">Inglés</option>`+
                    `<option value="es">Español</option>`;  
        }
    } */
/*     alert(window.lang) */

    let footer =  document.getElementById(`foot`),
        lang;

    if(window.navfoot.lang == 'es'){
        lang += `<option value="${longpath}php/switch_lang.php?lang=es">${window.navfoot.footer.languageOpc1}</option>`+
                `<option value="${longpath}php/switch_lang.php?lang=en">${window.navfoot.footer.languageOpc2}</option>`;
    }else if(window.navfoot.lang == 'en'){
        lang += `<option value="${longpath}php/switch_lang.php?lang=en">${window.navfoot.footer.languageOpc2}</option>`+
                `<option value="${longpath}php/switch_lang.php?lang=es">${window.navfoot.footer.languageOpc1}</option>`;
    }
    footer.innerHTML =  `<footer>`+
                            `<div class="container_footer">`+
                                `<span>`+
                                    `<span>${window.navfoot.footer.language} </span>`+
                                    `<select id="language" onchange="window.location = document.getElementById('language').value;">`+
                                        lang+
                                    `</select>`+
                                `</span>`+
                                `<p id="test"></p>`+
                                `<h3>${window.navfoot.footer.title}</h3>`+
                                `<p>${window.navfoot.footer.phrase}</p>`+
                                `<ul class="redes">`+
                                    `<li><a href="https://www.instagram.com/la.manadasv/"target="blank"><img id="img_footer" src="`+ longpath +`src/icons/instagram.svg" width="40px" height="40px"></a></li>`+
                                    `<li><a href="https://www.facebook.com/profile.php?id=100070244422672"target="blank"><img id="img_footer" src="`+ longpath +`src/icons/facebook.svg" width="40px" height="40px"></a></li>`+
                                `</ul>`+
                            `</div>`+
                            `<div class="footer_bottom">`+
                                `<p>${window.navfoot.footer.copyright}</span></p>`+
                            `</div>`+
                        `</footer>`;

    if(location.pathname.includes('/pets/')){
        if(window.navfoot.session == true){
            login =   
                            '<a href="'+ longpath +'adopt_form.php">'+
                                '<button class="boton">'+
                                    'Adoptar'+
                                '</button>'+
                            '</a>'+
                        '</div>';
        }else{
            login =        '<a href="'+ longpath +'/php/login.php">'+
                                '<button class="boton">'+
                                    'Iniciar sesion<br>para adoptar'+
                                '</button>'+
                            '</a>'+
                        '</div>';       
        }
        
     
        document.getElementById('boton').innerHTML +=login;
    }
}