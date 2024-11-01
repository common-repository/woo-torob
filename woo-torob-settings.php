<?php
add_action( 'admin_menu', 'wootooplu_torob_plugin_menu' );

function wootooplu_torob_plugin_menu() {
    add_options_page(
        'هماهنگ ساز تُرُب',
        'هماهنگ ساز تُرُب',
        'manage_options',
        'woo-torob-help.php',
        'wootooplu_help_page_generator_callback'
    );
}
function wootooplu_help_page_generator_callback(){
?>
<div class="wrap ks-torob-wrapper">
    <h1 class="torob-headers"><a class="torob-headers" href="https://kanishop.ir/?utm_source=wordpressorg&utm_medium=link&utm_campaign=wootorobplugin&utm_id=wootorob" target="_blank"> کاری از وب سایت کانی شاپ - kanishop.ir </a></h1>
    <table class="widefat">
        <tbody>
        <tr>
            <td>
 
                <p class="torob-green">
                    <a href="https://kanishop.ir/?utm_source=wordpressorg&utm_medium=link&utm_campaign=wootorobplugin&utm_id=wootorob"  target="_blank">
                    محبوب ترین و قویترین قالب فروشگاهی ایرانی وردپرس
                    </a>
                </p>
                <a href="https://kanishop.ir"  target="_blank">
                    <img src="<?php echo plugin_dir_url( __FILE__ ) ?>assets/img/kanishop.jpg"/>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <h1 class="torob-headers help-title"> راهنـــمای استفاده</h1>
            </td>
        </tr>
        <tr>
            <td>
                برای استفاده از این افزونه نیازی به اعمال هیچ تنظیمی نیست
                <br>
                فقط برای اینکه محصولات متغیر شما به خوبی توسط ربات تُرُب بخوبی خوانده شود کافیست یک قیمت پیش فرض برای این نوع محصولات در نظر بگیرید .
                <br>
                <br>
                <img src="<?php echo plugin_dir_url( __FILE__ ) ?>assets/img/woo-torob-set-variable-product.png"/>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<?php
}
?>