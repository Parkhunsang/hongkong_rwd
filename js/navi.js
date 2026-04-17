document.addEventListener('DOMContentLoaded', ()=>{
    const headerWrap=document.querySelector('#header_wrap')
    const mainMenu=document.querySelectorAll('#mainmenu_list>li>a')
    const languageWrap=document.querySelector('#language')
    const languageText=document.querySelector('#language_text')
    const languageList=document.querySelector ('#language_list')
    // const subMenuLi=document.querySelectorAll('.submenu_list>li')
    let selectedMenu=null;
    // let isWheel=false;
  
    for(const item of mainMenu){
        item.addEventListener('mouseenter',showSubMenu)
        item.addEventListener('focus',showSubMenu)
    }
    headerWrap.addEventListener('mouseleave', hideSubMenu)
    // window.addEventListener('mousewheel', wheelMenu)

    function showSubMenu(){

      gsap.to(headerWrap, {height:400, duration:0.3, ease:'power1.out'})
      //보여주게 하는 건 활성화 비활성화와 상관 없음. 즉, if문에 안들어가도 된다는 것.

      if(selectedMenu!=null && selectedMenu!=this){
        selectedMenu.parentElement.classList.remove('selected')
        let SubMenu=selectedMenu.nextElementSibling
        
        gsap.to(SubMenu, {opacity:0, duration:0.1, ease:'power1.out', onComplete:()=>{
        gsap.set(SubMenu, {display:'none'})
        }})
      }

      if(selectedMenu!=this){
        selectedMenu=this;
        selectedMenu.parentElement.classList.add('selected')
        
        let SubMenu=selectedMenu.nextElementSibling
        
        gsap.set(SubMenu, {display:'flex'})
        gsap.to(SubMenu, {opacity:1, duration:0.7, ease:'power1.out'})
        
      }
    }
    function hideSubMenu(){
      if(selectedMenu!=null){
        selectedMenu.parentElement.classList.remove('selected')

        let SubMenu=selectedMenu.nextElementSibling
        gsap.to(SubMenu, {opacity:0, duration:0.1, ease:'power1.out', onComplete:()=>{
        gsap.set(SubMenu, {display:'none'})
       
        }})
      }
      gsap.to(headerWrap, {height:80, duration:0.3, ease:'power1.out'})
      selectedMenu=null;
    }

    languageText.addEventListener('click', ()=>{
      languageList.classList.add('active')
    })
    languageWrap.addEventListener('mouseleave', ()=>{
      languageList.classList.remove('active')
    })
  })