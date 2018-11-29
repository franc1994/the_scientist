<?php

declare(strict_types=1);

namespace LaravelDay\Article\ValueObject;

final class ArticleId
{
    /* @var string */
    private $id;

    public function __construct(string $id)
    {
        if (0 == \preg_match('/^ART-[0-9]{10}-XYZ$/', $id)) {
            throw new \InvalidArgumentException('ID non coerente');
        }

        $this->id = $id;
    }

    public function isEqual(self $articleId)
    {
        return (string) $articleId == $this->id;
    }

    public function __toString()
    {
        return $this->id;
    }

    private function __clone()
    {
    }
}
