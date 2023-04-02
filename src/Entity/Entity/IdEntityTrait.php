<?php declare(strict_types=1);

namespace Palmyr\SymfonyCommonUtils\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

trait IdEntityTrait
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

}