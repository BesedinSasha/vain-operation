<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 9:50 AM
 */

namespace Vain\Operation\Result\Failed;


use Vain\Operation\Result\AbstractVainOperationResult;

class VainFailedOperationResult extends AbstractVainOperationResult
{
    public function __construct()
    {
        parent::__construct(false);
    }
}