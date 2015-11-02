<?php

/*
 * This file is part of the Kreta package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kreta\Bundle\TimeTrackingBundle\EventListener;

use Kreta\Bundle\CoreBundle\EventListener\ResourceIfAllowedAnnotationListener;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

/**
 * Class TimeEntryIfAllowedAnnotationListener.
 */
class TimeEntryIfAllowedAnnotationListener extends ResourceIfAllowedAnnotationListener
{
    /**
     * {@inheritdoc}
     */
    public function onResourceIfAllowedAnnotationMethod(FilterControllerEvent $event)
    {
        list($object, $method) = $event->getController();
        $reflectionClass = new \ReflectionClass(get_class($object));
        $reflectionMethod = $reflectionClass->getMethod($method);

        if ($annotation = $this->annotationReader->getMethodAnnotation($reflectionMethod, $this->annotationClass)) {
            $resourceId = $event->getRequest()->attributes->get(sprintf('%sId', $this->resource));
            if (null !== $resourceId) {
                $grant = $this->resource === 'issue' ? 'view' : $annotation->getGrant();
                $event->getRequest()->attributes->set(
                    $this->resource, $this->getResourceIfAllowed($resourceId, $grant)
                );
            }
        }
    }
}
