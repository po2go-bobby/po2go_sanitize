<?php

namespace po2go\po2go_sanitize\Document\Punchout\Request;

use po2go\po2go_sanitize\Document;

/**
 * Class StartPageHtml
 * @package po2go\po2go_sanitize\Document\Punchout\Request
 */
class StartPageHtml extends Document
{

    /**
     * @return string
     */
    public function Prettify()
    {
        $dom = new \DOMDocument;
        $dom->loadHTML($this->source);
        return $dom->saveHTML();
    }
}