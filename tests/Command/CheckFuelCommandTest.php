<?php

declare(strict_types=1);

namespace App\Tests\Command;

use App\Command\CheckFuelCommand;
use App\Domain\FueledInterface;
use App\Exception\CheckFuelException;
use Exception;
use Generator;
use PHPUnit\Framework\TestCase;

class CheckFuelCommandTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->fueledObject     = $this->createMock(FueledInterface::class);
        $this->checkFuelCommand = new CheckFuelCommand($this->fueledObject);
    }

    /**
     * @dataProvider dataProvider
     * @throws Exception
     */
    public function testExecuteWithException(int $input): void
    {
        $this->fueledObject->expects($this->once())
            ->method('getLevel')
            ->willReturn($input);

        $this->expectException(CheckFuelException::class);
        $this->expectExceptionMessage('The object has run out of fuel');

        $this->checkFuelCommand->execute();
    }

    /**
     * @return Generator<array>
     */
    public function dataProvider(): Generator
    {
        yield [0];
        yield [-1];
    }

    /**
     * @throws Exception
     */
    public function testExecute(): void
    {
        $this->fueledObject->expects($this->once())
            ->method('getLevel')
            ->willReturn(1);

        $this->checkFuelCommand->execute();
    }
}