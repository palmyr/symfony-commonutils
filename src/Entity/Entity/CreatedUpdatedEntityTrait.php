<?php declare(strict_types=1);

namespace Palmyr\SymfonyCommonUtils\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

trait CreatedUpdatedEntityTrait
{

    #[ORM\Column()]
    protected ?\DateTimeImmutable $createdAt;

    #[ORM\Column()]
    protected ?\DateTimeImmutable $updatedAt;

    /**
     * @return \DateTimeImmutable|null
     */
    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeImmutable|null $createdAt
     * @return CreatedUpdatedEntityInterface
     */
    public function setCreatedAt(?\DateTimeImmutable $createdAt): CreatedUpdatedEntityInterface
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeImmutable|null $updatedAt
     * @return CreatedUpdatedEntityInterface
     */
    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): CreatedUpdatedEntityInterface
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}