document.addEventListener('DOMContentLoaded',()=>{
    showTimeSelect()
    showSeatSelect()
    clickSeatOption()
    showSum()
})

function showTimeSelect() {
    const timeSelectWrapDeparture=document.querySelector('#departure');
    const timeSelectWrapArrival=document.querySelector('#arrival');
    const firstDateLi=document.querySelector('.date_select_list.departure>li:first-child');
    const lastDateLi=document.querySelector('.date_select_list.arrival>li:first-child');

    // gsap.set(timeSelectWrapDeparture, {display: 'none'});
    // gsap.set(timeSelectWrapArrival, {display: 'none'});

    let isDepartureOpen = false;
    let isArrivalOpen = false;

    firstDateLi.addEventListener('click',()=>{
        if(isDepartureOpen!=true) {
            gsap.to(timeSelectWrapDeparture, {display: 'block', duration: 0.2, ease: 'power1.out'});
            firstDateLi.classList.add('selected');

            isDepartureOpen=true;
        } else {
            gsap.to(timeSelectWrapDeparture, {display: 'none', duration: 0.2, ease: 'power1.out'});
            firstDateLi.classList.remove('selected');

            isDepartureOpen=false;
        }
    });

    lastDateLi.addEventListener('click',()=>{
        if(isArrivalOpen!=true) {
            gsap.to(timeSelectWrapArrival, {display: 'block', duration: 0.2, ease: 'power1.out'});
            lastDateLi.classList.add('selected');

            isArrivalOpen = true;
        } else {
            gsap.to(timeSelectWrapArrival, {display: 'none', duration: 0.2, ease: 'power1.out'});
            lastDateLi.classList.remove('selected');

            isArrivalOpen = false;
        }
    });
}

function showSeatSelect() {
    const priceWrapDeparture = document.querySelector('#departure .time_option_select #departure_price');
    const priceWrapArrival = document.querySelector('#arrival .time_option_select #arrival_price');
    const seatOptionSelectWrapDeparture=document.querySelector('#departure_seat_option');
    const seatOptionSelectWrapArrival=document.querySelector('#arrival_seat_option');

    gsap.set(seatOptionSelectWrapDeparture, {display: 'none'});
    gsap.set(seatOptionSelectWrapArrival, {display: 'none'});

    let isDepartureOpen = false;
    let isArrivalOpen = false;


    priceWrapDeparture.addEventListener('click',()=>{
        if(isDepartureOpen!=true) {
            priceWrapDeparture.classList.add('selected');
            gsap.to(seatOptionSelectWrapDeparture, {display: 'flex', duration: 0.2, ease: 'power1.out'});

            isDepartureOpen = true;
        } else {
            priceWrapDeparture.classList.remove('selected');
            gsap.to(seatOptionSelectWrapDeparture, {display: 'none', duration: 0.2, ease: 'power1.out'});
            isDepartureOpen = false;
        }
    });

    priceWrapArrival.addEventListener('click',()=>{
        if(isArrivalOpen!=true) {
            priceWrapArrival.classList.add('selected');
            gsap.to(seatOptionSelectWrapArrival, {display: 'flex', duration: 0.2, ease: 'power1.out'});
            isArrivalOpen = true;
        } else {
            priceWrapArrival.classList.remove('selected');
            gsap.to(seatOptionSelectWrapArrival, {display: 'none', duration: 0.2, ease: 'power1.out'});
            isArrivalOpen=false;
        }
    });
}

function clickSeatOption(){
    const seatOptionWrapDep=document.querySelectorAll('#departure_seat_option .seat_option');
    const seatOptionWrapArr=document.querySelectorAll('#arrival_seat_option .seat_option');
    const upBoxDep=document.querySelectorAll('#departure_seat_option .seat_option .up_box');
    const upBoxTextDep=document.querySelectorAll('#departure_seat_option .seat_option .up_box p');
    const upBoxArr=document.querySelectorAll('#arrival_seat_option .seat_option .up_box');
    const upBoxTextArr=document.querySelectorAll('#arrival_seat_option .seat_option .up_box p');
    
    let isDepartureOpen = false;
    let isArrivalOpen = false;

    seatOptionWrapDep.addEventListener('click',()=>{
        if(isDepartureOpen!=true) {
            gsap.to(upBoxDep, {display: 'flex', duration: 0.2, ease: 'power1.out'});
            seatOptionWrapDep.classList.add('selected');
            isDepartureOpen = true;
        } else {
            gsap.to(upBoxDep, {display: 'none', duration: 0.2, ease: 'power1.out'});
            seatOptionWrapDep.classList.remove('selected');
            isDepartureOpen = false;
        }
    })

    seatOptionWrapArr.addEventListener('click',()=>{
        if(isArrivalOpen!=true) {
            gsap.to(upBoxArr, {display: 'flex', duration: 0.2, ease: 'power1.out'});
            seatOptionWrapArr.classList.add('selected');
            isArrivalOpen = true;
        } else {
            gsap.to(upBoxArr, {display: 'none', duration: 0.2, ease: 'power1.out'});
            seatOptionWrapArr.classList.remove('selected');
            isArrivalOpen = false;
        }
    })
}

function showSum(){
    const arrivalSeatOption=document.querySelectorAll('#arrival_seat_option');
    const seatOption=arrivalSeatOption.children
    const sumWrap=document.querySelector('#sum_wrap');

    gsap.set(sumWrap, {display: 'none'});

    seatOption.addEventListener('click',()=>{
        sumWrap.style.display='flex';
    })
}