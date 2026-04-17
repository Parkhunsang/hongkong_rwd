//컨텐츠(예약)시작
document.addEventListener('DOMContentLoaded', ()=>{
    barMenuEvent()
    valueEffect()
    recommandEffect()
    popularEvent()
    partnerEvent()
    travelEvent()
})

function barMenuEvent(){
    const barMenu=document.querySelectorAll('#bar_list>li')
    const panel=document.querySelector('#panel_wrap')

    let selectedBar=barMenu[0]
    showPanel(0)

    barMenu.forEach((item, index)=>{
        item.addEventListener('click',()=>{
            activateBar(index)
            showPanel(index)
        })
    })
    
    function activateBar(index){
        if(selectedBar!=barMenu[index]){
            selectedBar.classList.remove('selected')

            selectedBar=barMenu[index]
            selectedBar.classList.add('selected')
        }
    }

    function showPanel(index){
        axios.get(`./data${index}.html`).then((res)=>{
            panel.innerHTML=res.data
          }, ()=>{
            panel.innerHTML='데이터를 찾을 수 없습니다.'
          }) 
    }
}
//컨텐츠(예약)끝
//컨텐츠(가치)시작
function valueEffect(){
    const valueWrap=document.querySelector('#company_value_wrap')
    const valueTitle=document.querySelector('#value_big_title')
    const valueList=document.querySelectorAll('#value_list>li')


    gsap.to(valueTitle, {y:0, opacity:1, duration:1, ease:'power1.out', scrollTrigger:{
        trigger:valueWrap,
        start:'top 60%',
    }})

    valueList.forEach((item, index)=>{
        gsap.to(item, {y:0, opacity:1, delay:0.3*index, duration:0.8, ease:'power1.out', scrollTrigger:{
            trigger:valueWrap,
            start:'top 30%',
        }})
    })
}
//컨텐츠(가치)끝
//컨텐츠(추천운항지)시작
function recommandEffect(){
    const recommandWrap=document.querySelector('#recommand_list')
    const recommandLi=document.querySelectorAll('#recommand_list>li')
    const nextSlideBtn=document.querySelector('#next_slide_btn')
    const prevSlideBtn=document.querySelector('#prev_slide_btn')
    const reservationBtn=document.querySelectorAll('.reservation_btn')
    const recommand=document.querySelector('#recommand')

    let recommandWidth=recommandLi[0].offsetWidth
    let recommandLength=recommandLi.length;

    let currentIndex=0;
    let nextIndex=1;

    recommandReset()
    init()
    initEvent()
    
    gsap.to(recommand, {y:0, opacity:1, duration:0.3, ease:'power1.out', scrollTrigger:{
        trigger:recommandWrap,
        start:'top 100%',
    }})

    for(const item of reservationBtn){
        item.addEventListener('click', ()=>{
            item.classList.add('selected')
        })
        item.addEventListener('mouseleave',()=>{
            item.classList.remove('selected')
        })
    }

    function init(){
        gsap.set(recommandLi, {left:recommandWidth, opacity:0})
        gsap.set(recommandLi[0], {left:0, opacity:1})
    }

    function initEvent(){
        window.addEventListener('resize', recommandReset)
        nextSlideBtn.addEventListener('click', nextSlideLi)
        prevSlideBtn.addEventListener('click', prevSlideLi)
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
//컨텐츠(추천운항지)끝
//컨텐츠(주요운항지)시작
function popularEvent(){
    const popularWrap=document.querySelector('#popular_wrap')
    const popularList=document.querySelector('#popular_list')
    const popularLi = document.querySelectorAll('#popular_list>li')
    const popularTextBox = document.querySelectorAll('.popular_text_box')
    const showNextIcon = document.querySelectorAll('.show_next_place_icon')

    let currentIndex=0;
    init()

    gsap.to(popularList, {y:0, opacity:1, duration:0.7, ease:'power2.out', scrollTrigger:{
        trigger:popularWrap,
        start:'top 80%',
    }})

    showNextIcon.forEach((item, index)=>{
        item.addEventListener('click', ()=>{
            showNextli(index)
        })
    })

    function init(){
        popularLi[0].classList.add('selected')
        popularTextBox[0].classList.add('selected')
        showNextIcon[0].classList.add('selected')
    }

    function showNextli(index){
        popularLi[currentIndex].classList.remove('selected')
        popularTextBox[currentIndex].classList.remove('selected')
        showNextIcon[currentIndex].classList.remove('selected')

        currentIndex=index

        popularLi[currentIndex].classList.add('selected')
        popularTextBox[currentIndex].classList.add('selected')
        showNextIcon[currentIndex].classList.add('selected')
    }
}
//컨텐츠(주요운항지)끝
//컨텐츠(파트너)시작
function partnerEvent(){
    const partnerWrap=document.querySelector('#partner_wrap')
    const partnerTitle=document.querySelector('#partner_explain_box')
    const partnerBox=document.querySelectorAll('#partner_list>li')

    gsap.to(partnerTitle, {y:0, opacity:1, duration:1, ease:'power1.out', scrollTrigger:{
        trigger:partnerWrap,
        start:'top 80%',
    }})

    partnerBox.forEach((item, index)=>{
        gsap.to(item, {y:0, opacity:1, delay:0.3*index, duration:0.5, ease:'power1.out', scrollTrigger:{
            trigger:partnerWrap,
            start:'-10% 30%'
            
        }})
    })
}
//컨텐츠(파트너)끝
//컨텐츠(여행준비)시작
function travelEvent(){
    const travelWrap=document.querySelector('#travel_wrap')
    const travelBox=document.querySelector('#travel_box')
    const travelList=document.querySelector('#travel_list')

    gsap.to(travelBox, {y:0, opacity:1, duration:0.5, ease:'power1.out', scrollTrigger:{
        trigger:travelWrap,
        start:'30% 90%'
        
    }})

    gsap.to(travelList, {y:0, opacity:1, duration:1, ease:'power1.out', scrollTrigger:{
        trigger:travelWrap,
        start:'30% 90%'
    }})

}
//컨텐츠(여행준비)끝