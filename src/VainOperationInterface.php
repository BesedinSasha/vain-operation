<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 11:43 AM
 */

namespace Vain\Operation;

use Vain\Operation\Result\VainOperationResultInterface;

interface VainOperationInterface
{
    /**
     * @return string
     */
    public function getId();
    
    /**
     * @return VainOperationResultInterface
     */
    public function execute();
}