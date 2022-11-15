<?php

namespace JoliCode\Slack\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ObjsConversationDisplayCountsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsConversationDisplayCounts';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsConversationDisplayCounts';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsConversationDisplayCounts();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('display_counts', $data) && $data['display_counts'] !== null) {
            $object->setDisplayCounts($data['display_counts']);
        }
        elseif (\array_key_exists('display_counts', $data) && $data['display_counts'] === null) {
            $object->setDisplayCounts(null);
        }
        if (\array_key_exists('guest_counts', $data) && $data['guest_counts'] !== null) {
            $object->setGuestCounts($data['guest_counts']);
        }
        elseif (\array_key_exists('guest_counts', $data) && $data['guest_counts'] === null) {
            $object->setGuestCounts(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['display_counts'] = $object->getDisplayCounts();
        $data['guest_counts'] = $object->getGuestCounts();
        return $data;
    }
}