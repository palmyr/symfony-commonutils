<?php declare(strict_types=1);

namespace Palmyr\SymfonyCommonUtils\Entity\Entity;

interface CreatedUpdatedEntityInterface
{

    /**
     * @return \DateTimeImmutable|null
     */
    public function getCreatedAt(): ?\DateTimeImmutable;

    /**
     * @param \DateTimeImmutable|null $createdAt
     * @return CreatedUpdatedEntityInterface
     */
    public function setCreatedAt(?\DateTimeImmutable $createdAt): CreatedUpdatedEntityInterface;

    /**
     * @return \DateTimeImmutable|null
     */
    public function getUpdatedAt(): ?\DateTimeImmutable;

    /**
     * @param \DateTimeImmutable|null $updatedAt
     * @return CreatedUpdatedEntityInterface
     */
    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): CreatedUpdatedEntityInterface;
}