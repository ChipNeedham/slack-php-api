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
class ObjsResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsResources';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsResources';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsResources();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('excluded_ids', $data) && $data['excluded_ids'] !== null) {
            $values = array();
            foreach ($data['excluded_ids'] as $value) {
                $values[] = $value;
            }
            $object->setExcludedIds($values);
        }
        elseif (\array_key_exists('excluded_ids', $data) && $data['excluded_ids'] === null) {
            $object->setExcludedIds(null);
        }
        if (\array_key_exists('ids', $data) && $data['ids'] !== null) {
            $values_1 = array();
            foreach ($data['ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setIds($values_1);
        }
        elseif (\array_key_exists('ids', $data) && $data['ids'] === null) {
            $object->setIds(null);
        }
        if (\array_key_exists('wildcard', $data) && $data['wildcard'] !== null) {
            $object->setWildcard($data['wildcard']);
        }
        elseif (\array_key_exists('wildcard', $data) && $data['wildcard'] === null) {
            $object->setWildcard(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExcludedIds()) {
            $values = array();
            foreach ($object->getExcludedIds() as $value) {
                $values[] = $value;
            }
            $data['excluded_ids'] = $values;
        }
        $values_1 = array();
        foreach ($object->getIds() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['ids'] = $values_1;
        if (null !== $object->getWildcard()) {
            $data['wildcard'] = $object->getWildcard();
        }
        return $data;
    }
}