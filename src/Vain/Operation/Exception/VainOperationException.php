<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 12:00 PM
 */

namespace Vain\Operation\Exception;

use Vain\Core\Exception\VainCoreException;
use Vain\Operation\VainOperationInterface;

class VainOperationException extends VainCoreException
{
    private $operation;

    /**
     * VainOperationException constructor.
     * @param VainOperationInterface $operation
     * @param string $message
     * @param int $code
     */
    public function __construct(VainOperationInterface $operation, $message, $code)
    {
        $this->operation = $operation;
        parent::__construct($message, $code);
    }

    /**
     * @return VainOperationInterface
     */
    public function getOperation()
    {
        return $this->operation;
    }
}