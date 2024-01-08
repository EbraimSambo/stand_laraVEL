const buttonclose = document.querySelector('.closse')
const message = document.querySelector('.containerMessage')


buttonclose-addEventListener('click', ()=>{
    message.classList.add('close');
})


$(document).ready(function(){
    $(window).on('load scroll', function(){
        if ($(window).scollTop > 30) {
            $('#mainHeader').css({'background':'#111','box-shadow':'0 .2rem .5rem rgba(0,0,0.4)'})
        }else{
            $('#mainHeader').css({'background':'none','box-shadow':'none'})
        }
    })
})
