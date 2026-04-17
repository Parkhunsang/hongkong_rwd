window.addEventListener('load', ()=>{
    const visualWrap=document.querySelector('#visual_wrap')
    const visualLi=document.querySelectorAll('#visual_list>li')
    const nextBtn=document.querySelector('#next_btn')
    const prevBtn=document.querySelector('#prev_btn')
    const visualText=document.querySelectorAll('.visual_text')

    let visualWidth=visualWrap.offsetWidth;
    let visualLength=visualLi.length;

    let currentIndex=0;
    let nextIndex=1;
    let timer=null;

    visualreset();//초기에 width값을 구하기 위해 한번 실행시키고
    startShowImg();
    init();
    ininEvent();

    function init(){
        gsap.set(visualLi, {left:visualWidth, opacity:0, scale:1.4})
        gsap.set(visualLi[0], {left:0, opacity:1, scale:1})
        
        gsap.set(visualText, {top:200+'px', opacity:0})
        gsap.set(visualText[0], {top:150+'px', opacity:1})
    }

    function ininEvent(){
        window.addEventListener('resize', visualreset)//resize할때마다 함수내부에 한번 더 적어서 계속 반영할 수 있도록 하기
        nextBtn.addEventListener('click', showNextImg)
        prevBtn.addEventListener('click', showPrevImg)
        visualWrap.addEventListener('mouseenter', stopShowImg)
        visualWrap.addEventListener('mouseleave', startShowImg)
    }

    function startShowImg(){
        timer=setInterval(showNextImg, 8000)//요소에 준 애니메이션 시간보다 인터벌 시간이 더 길어야 한다.
    }

    function stopShowImg(){
        clearInterval(timer);
    }

    function showNextImg(){
        nextIndex=currentIndex+1;

        if(nextIndex>visualLength-1){
            nextIndex=0
        }

        gsap.to(visualLi[currentIndex], {left:-visualWidth, opacity:0, duration:0.5, ease:'power2.out'})//기존것을 사라지게 한 것
        gsap.set(visualText[currentIndex], {top:200+'px', opacity:0})

        gsap.set(visualLi[nextIndex], {left:visualWidth, opacity:0, scale:1.4})//스텐바이
        gsap.to(visualLi[nextIndex], {left:0, opacity:1, onComplete:()=>{
            gsap.to(visualLi[nextIndex], {scale:1, duration:0.5, ease:'power2.out'})
            gsap.to(visualText[nextIndex], {top:150+'px', opacity:1, duration:0.5, ease:'power1.out'})
        }})
        currentIndex=nextIndex;
    }

    function showPrevImg(){
        nextIndex=currentIndex-1;

        if(nextIndex<0){
            nextIndex=visualLength-1
        }

        gsap.to(visualLi[currentIndex], {left:visualWidth, opacity:0, duration:0.5, ease:'power2.out'})
        gsap.set(visualText[currentIndex], {top:200+'px', opacity:0})

        gsap.set(visualLi[nextIndex], {left:-visualWidth, opacity:0, scale:1.4})//스텐바이
        gsap.to(visualLi[nextIndex], {left:0, opacity:1, onComplete:()=>{
            gsap.to(visualLi[nextIndex], {scale:1, duration:0.5, ease:'power2.out'})
            gsap.to(visualText[nextIndex], {top:150+'px', delay:0.5, opacity:1, duration:0.5, ease:'power1.out'})
        }})

        currentIndex=nextIndex;
    }

    function visualreset(){
        visualWidth=visualWrap.offsetWidth
        // alert(visualWidth)
    }

})
// 1. init()에서 사이트 컨셉에 맞게 정하기