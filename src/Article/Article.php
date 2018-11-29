<?php

declare(strict_types=1);

namespace LaravelDay\Article;

final class Article
{
    /** @var int */
    private $id;
    /** @var string */
    private $title;
    /** @var string */
    private $body;
    /** @var \DateTime */
    private $creationDate;

    public function __construct(
        int $id,
        string $title,
        string $body,
        \DateTimeImmutable $creationDate
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getId(): Int
    {
        return $this->id;
    }

    public function getTitle(): String
    {
        return $this->title;
    }

    public function getBody(): String
    {
        return $this->body;
    }

    public function getCreationDate(): \DateTimeImmutable
    {
        return $this->creationDate;
    }
}
