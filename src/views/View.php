<?php

namespace views;

class View
{

    const DEFAULT_HEADER = 'meta.php';
    const DEFAULT_FOOTER = 'footer.php';

    public function render($body, $header = null, $footer = null)
    {
        if ($header == null)
            include('./src/components/seo/' . self::DEFAULT_HEADER);
        else
            include('./src/components/seo/' . $header);

        include('./src/pages/' . $body);

        if ($footer == null)
            include('./src/components/SEO/' . self::DEFAULT_FOOTER);
        else
            include('./src/components/SEO/' . $footer);
    }

    public static function component($url)
    {
        $url = './src/components/' . $url . '.php';
        if (file_exists($url)) return include($url);
        die("Erro");
    }

    public static function erro($msg)
    {
        echo "<script>alert('" . $msg . "')</script>";
    }

    public static function svg($svg)
    {
        $content = file_get_contents('./assets/svgs/' . $svg . '.svg');
        echo $content;
    }
}
