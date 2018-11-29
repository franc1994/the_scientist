<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article\ValueObject;

use LaravelDay\Article\ValueObject\Exception\TitleTooShort;
use LaravelDay\Article\ValueObject\Title;
use Tests\TestCase;

class TitleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldCreateATitle()
    {
        $expectedTitle = 'Quesot è un titolo valido';

        $title = new Title($expectedTitle);

        $this->assertEquals($expectedTitle, (string) $title);
        $this->assertTrue($title->isEqual(new Title($expectedTitle)));
        $this->assertEquals($expectedTitle, (string) $title);
    }

    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldRaiseTooShortTitleException()
    {
        $this->expectException(TitleTooShort::class);

        new Title('');
    }
}
