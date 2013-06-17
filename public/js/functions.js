function select_btn_side($this){
    $('#cont_side_btn a').each(function(){
        if($(this).hasClass('btn_top_sel')){
            $(this).removeClass('btn_top_sel');
            $(this).addClass('btn_top');
        }
    })
    $this.removeClass('btn_top');
    $this.addClass('btn_top_sel');
}
function select_btn_cen($this){
    if(typeof($this.attr('colore')) != "undefined"){
/*        if($this.attr('colore') == "bk_green"){
            $('.contCen').css('background-color','#00a652');
        }*/
        $('.contCen').removeClass('bk_pink bk_purple bk_yellow bk_green');
        $('.contCen').addClass($this.attr('colore'));
    }
    else{
        $('.contCen').css('background-color','#E0E0E0');
    }
    $('.contCen').css('border-radius','0 5px 5px 5px');
    $('.contcont').html("");
    $('.cont_int_cent').css('height','85px');
    $('.loading').removeClass('nascondi');
    $('#cont_center_btn a').each(function(){
        if($(this).hasClass('btn_top_sel')){
            $(this).removeClass('btn_top_sel');
            $(this).addClass('btn_top');
        }
    })
    $this.removeClass('btn_top');
    $this.addClass('btn_top_sel');
}

