<?php

class shopQrcodePlugin extends shopPlugin {

    public function frontendProduct() {
        //$include_path = wa()->getAppPath('plugins/qrcode/lib/classes/vendor/phpqrcode.php', 'shop');
        //include $include_path;
        //$path = wa()->getAppCachePath('plugins/qrcode/','shop');
        $url = wa()->getRootUrl();
        //$name = $this->uniqueName($path);
        //$filename = $path.$name;
        //QRcode::png('data', $filename, 'L', '4', 2); 
        $html = '<img src="'.$url.'?plugin=qrcode'.'"/>';
        return array('cart' => $html);
    }
    
    

}
