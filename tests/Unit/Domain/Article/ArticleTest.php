<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article;

use LaravelDay\Article\Article;
use LaravelDay\Article\ValueObject\ArticleId;
use LaravelDay\Article\ValueObject\Title;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldCreateAnArticle()
    {
        $id = new ArticleId('ART-1234567890-XYZ');
        $title = new Title('Questo è un titolo');
        $body = 'Questo è un articolo';
        $createationDate = new \DateTimeImmutable();

        $article = new Article($id, $title, $body, $createationDate);

        $this->assertSame($id, $article->getId());
        $this->assertSame($title, $article->getTitle());
        $this->assertSame($body, $article->getBody());
        $this->assertSame($createationDate, $article->getCreationDate());
    }
}
