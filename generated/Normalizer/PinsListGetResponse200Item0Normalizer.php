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
class PinsListGetResponse200Item0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0';
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
        $object = new \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $value = $data['items'];
            if (is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                $values = array();
                foreach ($data['items'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem0', 'json', $context);
                }
                $value = $values;
            } elseif (is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                $values_1 = array();
                foreach ($data['items'] as $value_2) {
                    $values_1[] = $this->denormalizer->denormalize($value_2, 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem1', 'json', $context);
                }
                $value = $values_1;
            }
            $object->setItems($value);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $value = $object->getItems();
        if (is_array($object->getItems())) {
            $values = array();
            foreach ($object->getItems() as $value_1) {
                $values[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $value = $values;
        } elseif (is_array($object->getItems())) {
            $values_1 = array();
            foreach ($object->getItems() as $value_2) {
                $values_1[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $value = $values_1;
        }
        $data['items'] = $value;
        $data['ok'] = $object->getOk();
        return $data;
    }
}