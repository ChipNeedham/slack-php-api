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
class ObjsResponseMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsResponseMetadata';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsResponseMetadata';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsResponseMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('messages', $data) && $data['messages'] !== null) {
            $values = array();
            foreach ($data['messages'] as $value) {
                $values[] = $value;
            }
            $object->setMessages($values);
        }
        elseif (\array_key_exists('messages', $data) && $data['messages'] === null) {
            $object->setMessages(null);
        }
        if (\array_key_exists('next_cursor', $data) && $data['next_cursor'] !== null) {
            $object->setNextCursor($data['next_cursor']);
        }
        elseif (\array_key_exists('next_cursor', $data) && $data['next_cursor'] === null) {
            $object->setNextCursor(null);
        }
        if (\array_key_exists('warnings', $data) && $data['warnings'] !== null) {
            $values_1 = array();
            foreach ($data['warnings'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWarnings($values_1);
        }
        elseif (\array_key_exists('warnings', $data) && $data['warnings'] === null) {
            $object->setWarnings(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMessages()) {
            $values = array();
            foreach ($object->getMessages() as $value) {
                $values[] = $value;
            }
            $data['messages'] = $values;
        }
        $data['next_cursor'] = $object->getNextCursor();
        if (null !== $object->getWarnings()) {
            $values_1 = array();
            foreach ($object->getWarnings() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['warnings'] = $values_1;
        }
        return $data;
    }
}