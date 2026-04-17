// 예약창시작
document.addEventListener('DOMContentLoaded',()=>{
    const panelMenu=document.querySelectorAll('#panel_list>li')
    const contentsMenu=document.querySelectorAll('#contents_list>li')

    let selectedPanel=panelMenu[0];
    let selectedContents=contentsMenu[0];

    panelMenu.forEach((item, index)=>{
        item.addEventListener('click', ()=>{
            activatePanel(index)
            activateContents(index)
        })
    })

    function activatePanel(index){
        if(selectedPanel!=panelMenu[index]){
            selectedPanel.classList.remove('selected')

            selectedPanel=panelMenu[index]
            selectedPanel.classList.add('selected')
        }
    }

    function activateContents(index){
        if(selectedContents!=contentsMenu[index]){
            selectedContents.classList.remove('selected')

            selectedContents=contentsMenu[index]
            selectedContents.classList.add('selected')
        }
    }
})
// 예약창끝
//추천운항지시작
document.addEventListener('DOMContentLoaded',()=>{
    recommandEffect()
})
function recommandEffect(){
    const recommandLi=document.querySelectorAll('#recommand_list>li');
    const prevBtn=document.querySelector('#prev_btn');
    const nextBtn=document.querySelector('#next_btn');

    let recommandWidth=recommandLi[0].offsetWidth
    let recommandLength=recommandLi.length;
    
    let currentIndex=0;
    let nextIndex=1;

    recommandReset()
    init()
    initEvent()

function init(){
    gsap.set(recommandLi, {left:recommandWidth, opacity:0})
    gsap.set(recommandLi[0], {left:0, opacity:1})
}

function initEvent(){
    window.addEventListener('resize', recommandReset)
    nextBtn.addEventListener('click', nextSlideLi)
    prevBtn.addEventListener('click', prevSlideLi)
}

function nextSlideLi(){
    nextIndex=currentIndex+1;

    if(nextIndex>recommandLength-1){
        nextIndex=0;
    }

    gsap.to(recommandLi[currentIndex], {left:-recommandWidth, opacity:0, duration:0.3, display:'none',ease:'power1.out'})
    gsap.set(recommandLi[nextIndex], {left:recommandWidth, opacity:0, display:'none'})
    gsap.to(recommandLi[nextIndex], {left:0, opacity:1, display:'block',duration:0.3, ease:'power1.out'})

    currentIndex=nextIndex;
}

function prevSlideLi(){
    nextIndex=currentIndex-1;

    if(nextIndex<0){
        nextIndex=recommandLength-1
    }

    gsap.to(recommandLi[currentIndex], {left:recommandWidth, opacity:0, display:'none',duration:0.3, ease:'power1.out'})
    gsap.set(recommandLi[nextIndex], {left:-recommandWidth, opacity:0, display:'none'})
    gsap.to(recommandLi[nextIndex], {left:0, opacity:1, display:'block', duration:0.5, ease:'power2.out'})
    currentIndex=nextIndex;
}

function recommandReset(){
    recommandWidth=recommandLi[0].offsetWidth;
}
}
//추천운항지끝
//주요운항지시작
document.addEventListener('DOMContentLoaded', ()=>{
    const popularMenu=document.querySelector('#popular_text_list')
    const popularMenuLi=document.querySelectorAll('#popular_text_list>li')

    let selectedMenu=null;

    gsap.set(popularMenuLi, {height:46})

    for(const item of popularMenuLi){
        item.addEventListener('click', showSubMenu)
    }

    function showSubMenu(){
        if(selectedMenu!=null && selectedMenu!=this){
        gsap.to(selectedMenu, {height:46, duration:0.3, ease:'power1.out'})
        selectedMenu.children[1].classList.remove('more_down_icon_selected')
    }

    if(selectedMenu!=this){
        selectedMenu=this
        gsap.to(selectedMenu, {height:selectedMenu.scrollHeight, duration:0.3, ease:'power1.out'})
        selectedMenu.children[1].classList.add('more_down_icon_selected')
    }
    }
})
//주요운항지끝