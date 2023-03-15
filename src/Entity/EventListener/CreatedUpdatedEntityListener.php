<?php declare(strict_types=1);

namespace Palmyr\SymfonyCommonUtils\Entity\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use Palmyr\SymfonyCommonUtils\Entity\Entity\CreatedUpdatedEntityInterface;

class CreatedUpdatedEntityListener
{

    public function prePersist(LifecycleEventArgs $args): void
    {
        if ( !$this->verifyObjectType($args) ) {
            return;
        }
        /** @var CreatedUpdatedEntityInterface $object */
        $object = $args->getObject();
        $object->setCreatedAt(new \DateTimeImmutable());
        $object->setUpdatedAt(new \DateTimeImmutable());
    }

    public function preUpdate(LifecycleEventArgs $args): void
    {
        if ( !$this->verifyObjectType($args) ) {
            return;
        }
        /** @var CreatedUpdatedEntityInterface $object */
        $object = $args->getObject();
        $object->setUpdatedAt(new \DateTimeImmutable());
    }

    protected function verifyObjectType(LifecycleEventArgs $args): bool
    {
        if ( $args->getObject() instanceof CreatedUpdatedEntityInterface ) {
            return true;
        }

        return false;
    }
}