<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:14 AM
 */

namespace Vain\Operation\Decorator;

use Vain\Operation\OperationInterface;

abstract class AbstractOperationDecorator implements OperationInterface
{
    private $operation;

    /**
     * AbstractVainOperationDecorator constructor.
     * @param OperationInterface $operation
     */
    public function __construct(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return OperationInterface
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->operation->getId();
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        return $this->operation->execute();
    }
}