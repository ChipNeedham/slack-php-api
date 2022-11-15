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
class ObjsBotProfileIconsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsBotProfileIcons';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsBotProfileIcons';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsBotProfileIcons();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('image_36', $data) && $data['image_36'] !== null) {
            $object->setImage36($data['image_36']);
        }
        elseif (\array_key_exists('image_36', $data) && $data['image_36'] === null) {
            $object->setImage36(null);
        }
        if (\array_key_exists('image_48', $data) && $data['image_48'] !== null) {
            $object->setImage48($data['image_48']);
        }
        elseif (\array_key_exists('image_48', $data) && $data['image_48'] === null) {
            $object->setImage48(null);
        }
        if (\array_key_exists('image_72', $data) && $data['image_72'] !== null) {
            $object->setImage72($data['image_72']);
        }
        elseif (\array_key_exists('image_72', $data) && $data['image_72'] === null) {
            $object->setImage72(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['image_36'] = $object->getImage36();
        $data['image_48'] = $object->getImage48();
        $data['image_72'] = $object->getImage72();
        return $data;
    }
}