var a = 1;

function Cambiar(x){
    $('.'+a).removeClass("active");
    $('.'+x).addClass("active");
    this.a = x;
}


jQuery(function(){
    
    jQuery(window).scroll(function(){
        console.log(jQuery(this).scrollTop());
        if(jQuery(this).scrollTop()>100){
            jQuery('.ContenedorClavado')
            .css({'opacity':'0.2'})
            jQuery('.CONTENT')
            .css({'opacity':'0.1'})
        }else if(jQuery(this).scrollTop() < 200) {
            jQuery('.ContenedorClavado')
            .css({'opacity':'0.8'})
            jQuery('.CONTENT')
            .css({'opacity':'1'})
            }
    })
})