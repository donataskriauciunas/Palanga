<?php

namespace payAndDrive\Models\Commands;

use payAndDrive\Libs\Tactician\TacticianHandleBox;

class VendorCommandBus implements CommandBus
{
    /** @var  TacticianHandleBox */
    private $tactician;

    public function __construct(TacticianHandleBox $tactician)
    {
        $this->tactician = $tactician;
    }

    /**
     * @param Command $command
     */
    public function dispatch(Command $command)
    {
        $commandName = $this->tactician->getExtractor()->extract($command);
        $handler = $this->tactician->getLocator()->getHandlerForCommand($commandName);
        $this->tactician->getInflector()->inflect($command, $handler);
    }
}
