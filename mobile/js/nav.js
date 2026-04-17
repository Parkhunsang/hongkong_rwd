window.addEventListener('load', () => {
    const mobileMenu=document.querySelector('#mainmenu');
    const openIcon=document.querySelector('#menu_icon');
    const closeIcon=document.querySelector('#close_btn');
    
    let menuWidth=window.innerWidth;
    let selectedMenu=null;
    let mainMenu=document.querySelectorAll('#mainmenu_list>li');

    gsap.set(mobileMenu, {width:menuWidth, height:window.innerHeight, right:-menuWidth, display:'none'});

    openIcon.addEventListener('click', slideOpenMenu);
    closeIcon.addEventListener('click', slideCloseMenu);

    for(const item of mainMenu){
        item.addEventListener('click', showSubMenu)
    }

    function slideOpenMenu() {
        gsap.set(mobileMenu, {display:'block'}); 
        gsap.to(mobileMenu, {right: 0, duration: 0.5, ease:'power1.out'});  
        gsap.set('body, html', {overflow:'hidden'});  
    }

    function slideCloseMenu() {
        if(selectedMenu!=null){
            gsap.to(selectedMenu, {height:40, duration:0.3, ease:'power1.out'})
            selectedMenu.children[1].classList.remove('more_down_icon_selected')
        }
        selectedMenu=null;

        gsap.to(mobileMenu, {right:-menuWidth, duration:0.5, ease:'power1.out', onComplete: ()=>{
            gsap.set(mobileMenu, {display:'none'});  
            gsap.set('body, html', {overflow:'visible'});  
        }});
    }

    function showSubMenu(){
        if(selectedMenu!=null && selectedMenu!=this){
            gsap.to(selectedMenu, {height:40, duration:0.3, ease:'power1.out'})
            selectedMenu.children[1].classList.remove('more_down_icon_selected')
        }

        if(selectedMenu!=this){
            selectedMenu=this
            gsap.to(selectedMenu, {height:selectedMenu.scrollHeight, duration:0.3, ease:'power1.out'})
            selectedMenu.children[1].classList.add('more_down_icon_selected')
        }
    }
});