<?php

/**
 * @author Коробонв Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopQrcodePluginFrontendQrcodeController extends waController {

    public function execute() {
        $plugin = wa()->getPlugin('qrcode');
        $data = waRequest::get('data');
        if (!$data) {
            $data = '';
        }
        $include_path = wa()->getAppPath('plugins/qrcode/lib/classes/vendor/phpqrcode.php', 'shop');
        include $include_path;
        $path = wa()->getAppCachePath('plugins/qrcode/', 'shop');
        waFiles::create($path);

        $name = sha1($data) . '.png';
        $filename = $path . $name;
        if (!file_exists($filename)) {
            QRcode::png($data, $filename, 'L', $plugin->getSettings('qrcode_size'), 2);
        }
        $im = imagecreatefrompng($filename);
        header('Content-Type: image/png');
        imagepng($im);
        imagedestroy($im);
    }

}
