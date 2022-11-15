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
class ObjsIconNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsIcon';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsIcon';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsIcon();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('image_102', $data) && $data['image_102'] !== null) {
            $object->setImage102($data['image_102']);
        }
        elseif (\array_key_exists('image_102', $data) && $data['image_102'] === null) {
            $object->setImage102(null);
        }
        if (\array_key_exists('image_132', $data) && $data['image_132'] !== null) {
            $object->setImage132($data['image_132']);
        }
        elseif (\array_key_exists('image_132', $data) && $data['image_132'] === null) {
            $object->setImage132(null);
        }
        if (\array_key_exists('image_230', $data) && $data['image_230'] !== null) {
            $object->setImage230($data['image_230']);
        }
        elseif (\array_key_exists('image_230', $data) && $data['image_230'] === null) {
            $object->setImage230(null);
        }
        if (\array_key_exists('image_34', $data) && $data['image_34'] !== null) {
            $object->setImage34($data['image_34']);
        }
        elseif (\array_key_exists('image_34', $data) && $data['image_34'] === null) {
            $object->setImage34(null);
        }
        if (\array_key_exists('image_44', $data) && $data['image_44'] !== null) {
            $object->setImage44($data['image_44']);
        }
        elseif (\array_key_exists('image_44', $data) && $data['image_44'] === null) {
            $object->setImage44(null);
        }
        if (\array_key_exists('image_68', $data) && $data['image_68'] !== null) {
            $object->setImage68($data['image_68']);
        }
        elseif (\array_key_exists('image_68', $data) && $data['image_68'] === null) {
            $object->setImage68(null);
        }
        if (\array_key_exists('image_88', $data) && $data['image_88'] !== null) {
            $object->setImage88($data['image_88']);
        }
        elseif (\array_key_exists('image_88', $data) && $data['image_88'] === null) {
            $object->setImage88(null);
        }
        if (\array_key_exists('image_default', $data) && $data['image_default'] !== null) {
            $object->setImageDefault($data['image_default']);
        }
        elseif (\array_key_exists('image_default', $data) && $data['image_default'] === null) {
            $object->setImageDefault(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getImage102()) {
            $data['image_102'] = $object->getImage102();
        }
        if (null !== $object->getImage132()) {
            $data['image_132'] = $object->getImage132();
        }
        if (null !== $object->getImage230()) {
            $data['image_230'] = $object->getImage230();
        }
        if (null !== $object->getImage34()) {
            $data['image_34'] = $object->getImage34();
        }
        if (null !== $object->getImage44()) {
            $data['image_44'] = $object->getImage44();
        }
        if (null !== $object->getImage68()) {
            $data['image_68'] = $object->getImage68();
        }
        if (null !== $object->getImage88()) {
            $data['image_88'] = $object->getImage88();
        }
        if (null !== $object->getImageDefault()) {
            $data['image_default'] = $object->getImageDefault();
        }
        return $data;
    }
}