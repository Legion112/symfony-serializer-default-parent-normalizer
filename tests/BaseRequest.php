<?php
declare(strict_types=1);

namespace Tests\Legion112\SerializerDiscriminatorDefault;

use Legion112\SerializerDiscriminatorDefault\Attributes\DiscriminatorDefault;
use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

#[DiscriminatorDefault(class: DefaultRequest::class)]
#[DiscriminatorMap(typeProperty: 'type', mapping: [
    'a' => ARequest::class,
    'b' => BRequest::class,
])]
abstract class BaseRequest
{
    public function __construct(
        public readonly string $id,
        public readonly string $type
    )
    {
    }
}