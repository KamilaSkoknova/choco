<?php

//nastaviteľný spacing 
function space_shortcode($space) {
    $space = '<div style="padding-' . $space['direction'] . ': '. $space['value'] .'px"></div>'; 
    return $space;
}

add_shortcode('space', 'space_shortcode');

//vlastný button dark
function button_dark_shortcode($button) {
    $button = '<a href="<?php echo home_url();?>/' . $button['link'] .'" class="btn button-dark" "></a>'; 
    return $button;
}

add_shortcode('button-dark', 'button_dark_shortcode');

//vlastný button light
function button_light_shortcode($button) {
    $button = '<a href="<?php echo home_url();?>/' . $button['link'] .'" class="btn button-light" "></a>'; 
    return $button;
}

add_shortcode('button-light', 'button_light_shortcode');

// kontaktné info
function contact_info_shortcode() {
    return 
    '<div class="contact-box">  
        <h4 class=contact-box__header>Sídlo firmy:</h4>
        <p class="pb-3"><b>Choco, s.r.o.</b><br>Bratislavská 1 <br> 811 11, Bratislava</p>

        <h4 class=contact-box__header mt-5>Kontaktné údaje:</h4>
        <p class="pb-3"><a href="tel:+421911111111"> 0911 111 111 </a><br>
        <a href="mailto:info@choco.sk">info@choco.sk</a></p>

        <h4 class=contact-box__header mt-5>Údaje firmy:</h4>
        <p><b>DIČ:</b> 11 1111 1111<br><b>IČO: </b>11 111 11</p>
    </div>';
}

add_shortcode('contact-info', 'contact_info_shortcode');
