<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:04 AM
 */

namespace Vain\Operation\Collection\Decorator;

use Vain\Operation\Collection\VainOperationCollectionInterface;
use Vain\Operation\VainOperationInterface;

class AbstractVainOperationCollectionDecorator implements VainOperationCollectionInterface
{
    private $collection;

    /**
     * AbstractVainOperationCollectionDecorator constructor.
     * @param VainOperationCollectionInterface $collection
     */
    public function __construct(VainOperationCollectionInterface $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @inheritDoc
     */
    public function add(VainOperationInterface $operation)
    {
        return $this->collection->add($operation);
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->collection->getId();
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        return $this->collection->execute();
    }
}