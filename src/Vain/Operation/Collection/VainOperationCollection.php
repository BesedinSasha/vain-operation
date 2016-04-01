<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 10:39 AM
 */

namespace Vain\Operation\Collection;


use Vain\Operation\Result\Successful\VainSuccessfulOperationResult;
use Vain\Operation\VainOperationInterface;

class VainOperationCollection implements VainOperationCollectionInterface
{
    
    private $id;

    /**
     * @var VainOperationInterface[]
     */
    private $operations;

    /**
     * AbstractVainOperationCollection constructor.
     * @param string $id
     * @param VainOperationInterface[] $operations
     */
    public function __construct($id, array $operations = [])
    {
        $this->id = $id;
        foreach ($operations as $operation) {
            $this->add($operation);
        }
    }

    /**
     * @inheritDoc
     */
    public function add(VainOperationInterface $operation)
    {
        $this->operations[] = $operation;
        
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->getId();
    }

    /**
     * @return VainOperationInterface[]
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $result = new VainSuccessfulOperationResult();

        foreach ($this->operations as $operation) {
            $result = $operation->execute();

            if (false === $result->getStatus()) {
                return $result;
            }
        }

        return $result;
    }
}