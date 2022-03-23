


function animarMenu (){
    const hamburgesa = document.querySelector('.hamburgesa');
    const menuMovil = document.querySelector('.navs-links');
    const enlaces = document.querySelectorAll('.navs-links li');
    hamburgesa.addEventListener('click', () =>{
        hamburgesa.classList.toggle('active');
        menuMovil.classList.toggle('active');

        enlaces.forEach((enlace, index)=>{
            if (enlace.style.animation){
                enlace.style.animation = '';
            } else{
                enlace.style.animation =`navLinkFade 0.5s ease forwards ${index / 9 + 0.1 }s`;
        }
        });

        hamburgesa.classList.toggle('cruz')
    
    })

    
}

animarMenu();


