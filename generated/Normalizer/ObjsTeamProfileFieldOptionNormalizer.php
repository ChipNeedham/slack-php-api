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
class ObjsTeamProfileFieldOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileFieldOption';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileFieldOption';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsTeamProfileFieldOption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_custom', $data) && $data['is_custom'] !== null) {
            $value = $data['is_custom'];
            if (is_bool($data['is_custom'])) {
                $value = $data['is_custom'];
            }
            $object->setIsCustom($value);
        }
        elseif (\array_key_exists('is_custom', $data) && $data['is_custom'] === null) {
            $object->setIsCustom(null);
        }
        if (\array_key_exists('is_multiple_entry', $data) && $data['is_multiple_entry'] !== null) {
            $value_1 = $data['is_multiple_entry'];
            if (is_bool($data['is_multiple_entry'])) {
                $value_1 = $data['is_multiple_entry'];
            }
            $object->setIsMultipleEntry($value_1);
        }
        elseif (\array_key_exists('is_multiple_entry', $data) && $data['is_multiple_entry'] === null) {
            $object->setIsMultipleEntry(null);
        }
        if (\array_key_exists('is_protected', $data) && $data['is_protected'] !== null) {
            $value_2 = $data['is_protected'];
            if (is_bool($data['is_protected'])) {
                $value_2 = $data['is_protected'];
            }
            $object->setIsProtected($value_2);
        }
        elseif (\array_key_exists('is_protected', $data) && $data['is_protected'] === null) {
            $object->setIsProtected(null);
        }
        if (\array_key_exists('is_scim', $data) && $data['is_scim'] !== null) {
            $value_3 = $data['is_scim'];
            if (is_bool($data['is_scim'])) {
                $value_3 = $data['is_scim'];
            }
            $object->setIsScim($value_3);
        }
        elseif (\array_key_exists('is_scim', $data) && $data['is_scim'] === null) {
            $object->setIsScim(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsCustom()) {
            $value = $object->getIsCustom();
            if (is_bool($object->getIsCustom())) {
                $value = $object->getIsCustom();
            }
            $data['is_custom'] = $value;
        }
        if (null !== $object->getIsMultipleEntry()) {
            $value_1 = $object->getIsMultipleEntry();
            if (is_bool($object->getIsMultipleEntry())) {
                $value_1 = $object->getIsMultipleEntry();
            }
            $data['is_multiple_entry'] = $value_1;
        }
        if (null !== $object->getIsProtected()) {
            $value_2 = $object->getIsProtected();
            if (is_bool($object->getIsProtected())) {
                $value_2 = $object->getIsProtected();
            }
            $data['is_protected'] = $value_2;
        }
        if (null !== $object->getIsScim()) {
            $value_3 = $object->getIsScim();
            if (is_bool($object->getIsScim())) {
                $value_3 = $object->getIsScim();
            }
            $data['is_scim'] = $value_3;
        }
        return $data;
    }
}