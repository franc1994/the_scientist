<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article\ValueObject;

use LaravelDay\Article\ValueObject\ArticleId;
use Tests\TestCase;

class ArticleIdTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldCreateAnArticleId()
    {
        $expectedArticleID = 'ART-0123456789-XYZ';

        $id = new ArticleId($expectedArticleID);

        $this->assertEquals($expectedArticleID, (string) $id);
        $this->assertTrue($id->isEqual(new ArticleId($expectedArticleID)));
        $this->assertEquals($expectedArticleID, (string) $id);
    }

    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldRaiseException()
    {
        $this->expectException(\InvalidArgumentException::class);

        new ArticleId('');
    }
}
