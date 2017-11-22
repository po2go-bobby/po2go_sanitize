<?php
/**
 * File containing Document
 *
 * @package po2go/po2go_sanitize
 * @author Bobby Pearson <bobby@punchout2go.com>
 * @copyright (c) 2017, PunchOut2Go LLC (https://www.punchout2go.com)
 */

namespace po2go\po2go_sanitize;

/**
 * Class Document
 * @package po2go\po2go_sanitize
 */
abstract class Document
{
    /**
     * @var string
     */
    protected $source = '';
    protected $htmlConfig = [
        'indent' => true,
        'output-xhtml' => true,
        'wrap' => 200
    ];
    protected $charset = 'utf8';

    /**
     * @param $source
     * @return mixed
     */
    public function Load($source)
    {
        $this->source = (is_string($source)) ? $source : '';
        return $this;
    }

    abstract public function Prettify();
}