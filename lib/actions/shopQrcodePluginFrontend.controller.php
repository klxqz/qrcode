<?php

class shopQrcodePluginFrontendController extends waController {

    public function execute() {
        
        $include_path = wa()->getAppPath('plugins/qrcode/lib/classes/vendor/phpqrcode.php', 'shop');
        include $include_path;
        $path = wa()->getAppCachePath('plugins/qrcode/','shop');
        waFiles::create($path);
        $name = $this->uniqueName($path);
        $filename = $path.$name;
        QRcode::png('data', $filename, 'L', '4', 2); 
        $im = imagecreatefrompng($filename);
        header('Content-Type: image/png');
        imagepng($im);
        imagedestroy($im);
    }
    
    protected function uniqueName($path) 
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        do {
            $name = '';
            for ($i = 0; $i < 10; $i++) {
                $n = rand(0, strlen($alphabet)-1);
                $name .= $alphabet{$n};
            }
            $name .= '.png';
        } while(file_exists($path.$name));
        
        return $name;
    }

}
