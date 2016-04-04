<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 12:00 PM
 */

namespace Vain\Operation\Exception;

use Vain\Core\Exception\CoreException;
use Vain\Operation\OperationInterface;

class OperationException extends CoreException
{
    private $operation;

    /**
     * VainOperationException constructor.
     * @param OperationInterface $operation
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(OperationInterface $operation, $message, $code, \Exception $previous)
    {
        $this->operation = $operation;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return OperationInterface
     */
    public function getOperation()
    {
        return $this->operation;
    }
}