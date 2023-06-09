<?php

declare(strict_types=1);

namespace App\Tests\Command;

use App\Command\MoveMacroCommand;
use App\Domain\ObjectInterface;
use App\Domain\Vector;
use Exception;
use PHPUnit\Framework\TestCase;

class MoveMacroCommandTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->objectInterface  = $this->createMock(ObjectInterface::class);
        $this->moveMacroCommand = new MoveMacroCommand($this->objectInterface);
    }

    /**
     * @throws Exception
     */
    public function testExecute(): void
    {
        $this->objectInterface->expects($this->exactly(5))
            ->method('get')
            ->withConsecutive(['level'], ['position'], ['velocity'], ['level'], ['velocity'])
            ->willReturnOnConsecutiveCalls(2, new Vector([]), new Vector([]), 2, 1);

        $this->objectInterface->expects($this->exactly(2))
            ->method('set');

        $this->moveMacroCommand->execute();
    }
}