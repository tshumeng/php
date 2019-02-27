<?php


class MissingDatfileTest extends \Codeception\TestCase\Test
{
    /**
     * @var \FunctionalGuy
     */
    protected $guy;

    /**
     *
     * @var Parser
     */
    protected $parser;

    protected function _before()
    {
        $this->parser = new \Udger\Parser(
                \Codeception\Util\Stub::makeEmpty("Psr\Log\LoggerInterface"),
                \Codeception\Util\Stub::makeEmpty("Udger\Helper\IP"));
    }

    protected function _after()
    {
    }
    
    // tests
    public function testParseWithMissingDatfile()
    {   
        $useragent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36';
        
        $this->setExpectedException("Exception", "Unable to expand filepath");
        $this->parser->parse($useragent);
    }
}