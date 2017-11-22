<?php

namespace po2go\po2go_sanitize\Document\Punchout\Request;

use po2go\po2go_sanitize\Document;

/**
 * Class StartPageHtml
 * @package po2go\po2go_sanitize\Document\Punchout\Request
 */
class StartPageHtml extends Document
{
    public function Prettify()
    {
        $tidy = new \tidy;
        $tidy->parseString($this->source, $this->htmlConfig, $this->charset);
        $tidy->cleanRepair();
        return $tidy;
    }
}