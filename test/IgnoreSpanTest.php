<?php

namespace Html2Text;

class IgnoreSpanTest extends \PHPUnit_Framework_TestCase
{
    public $input =<<< EOT
Outside<span class="_html2text_ignore">Inside</span>
EOT;


    public function testIgnoreSpans()
    {
        $expected_output =<<<EOT
Outside
EOT;

        $html2text = new Html2Text($this->input);
        $output = $html2text->get_text();

        $this->assertEquals($expected_output, $output);
    }
}
