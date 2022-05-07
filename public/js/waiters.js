
let call_waiter = document.querySelector('#call-waiter');
let waiters_container = document.querySelector('.waiters-container');
let x_mark = document.querySelector('.x-mark');

call_waiter.addEventListener("click",function(){
    
    waiters_container.style.display = 'flex';
});

x_mark.addEventListener('click',function(){

    waiters_container.style.display = 'none';
});

