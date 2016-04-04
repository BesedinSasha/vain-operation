<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:14 AM
 */

namespace Vain\Operation\Decorator;

use Vain\Operation\VainOperationInterface;

abstract class AbstractVainOperationDecorator implements VainOperationInterface
{
    private $operation;

    /**
     * AbstractVainOperationDecorator constructor.
     * @param VainOperationInterface $operation
     */
    public function __construct(VainOperationInterface $operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return VainOperationInterface
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