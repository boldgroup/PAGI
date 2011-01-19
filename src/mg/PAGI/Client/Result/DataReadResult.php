<?php
/**
 * This decorated result adds the functionality to check for user input (more
 * than one digit).
 *
 * PHP Version 5
 *
 * @category   Pagi
 * @package    Client
 * @subpackage Result
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://www.noneyet.ar/
 */
namespace PAGI\Client\Result;

use PAGI\Exception\ChannelDownException;

/**
 * This decorated result adds the functionality to check for user input (more
 * than one digit).
 *
 * PHP Version 5
 *
 * @category   Pagi
 * @package    Client
 * @subpackage Result
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @link       http://www.noneyet.ar/
 */
class DataReadResult extends DigitReadResult
{
    /**
     * Constructor.
     *
     * @param IResult $result Result to decorate.
     */
    public function __construct(IResult $result)
    {
        parent::__construct($result);
        $this->_digits = $result->getResult();
        if ($result->hasData()) {
            $this->_timeout = (strpos($result->getData(), '(timeout)') !== false);
        }
    }
}