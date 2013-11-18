<?php

class shopQrcodePlugin extends shopPlugin {

    protected static $plugin;

    public function __construct($info) {
        parent::__construct($info);
        if (!self::$plugin) {
            self::$plugin = &$this;
        }
    }

    protected static function getThisPlugin() {
        if (self::$plugin) {
            return self::$plugin;
        } else {
            return wa()->getPlugin('qrcode');
        }
    }

    public function frontendProduct($product) {
        if ($this->getSettings('status') && $this->getSettings('frontend_product')) {
            $routing = wa()->getRouting();
            $product_url = $routing->getUrl($this->app_id . '/frontend/product', array(
                'product_url' => $product->url,
                'category_url' => $product->category_url,
                    ), true);

            $url = wa()->getRootUrl();
            $html = '<img src="' . $url . '?plugin=qrcode&data=' . urlencode($product_url) . '"/>';
            $frontend_product_output = $this->getSettings('frontend_product_output');
            return array($frontend_product_output => $html);
        }
    }

    public function frontendСategory($category) {
        if ($this->getSettings('status') && $this->getSettings('frontend_category')) {
            $routing = wa()->getRouting();
            $category_url = $routing->getUrl($this->app_id . '/frontend/category', array('category_url' => $category->full_url), true);

            $url = wa()->getRootUrl();
            $html = '<img src="' . $url . '?plugin=qrcode&data=' . urlencode($category_url) . '"/>';
            return $html;
        }
    }

    public static function display() {
        $plugin = self::getThisPlugin();
        $data = $plugin->getSettings('custom_text');
        $url = wa()->getRootUrl();
        $html = '<img src="' . $url . '?plugin=qrcode&data=' . urlencode($data) . '"/>';
        return $html;
    }

}
