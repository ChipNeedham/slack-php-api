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
class AppsPermissionsResourcesListGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsResourcesListGetResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsResourcesListGetResponse200';
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
        $object = new \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
            unset($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
        }
        if (\array_key_exists('resources', $data) && $data['resources'] !== null) {
            $values = array();
            foreach ($data['resources'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsResourcesListGetResponse200ResourcesItem', 'json', $context);
            }
            $object->setResources($values);
            unset($data['resources']);
        }
        elseif (\array_key_exists('resources', $data) && $data['resources'] === null) {
            $object->setResources(null);
        }
        if (\array_key_exists('response_metadata', $data) && $data['response_metadata'] !== null) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsResourcesListGetResponse200ResponseMetadata', 'json', $context));
            unset($data['response_metadata']);
        }
        elseif (\array_key_exists('response_metadata', $data) && $data['response_metadata'] === null) {
            $object->setResponseMetadata(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['ok'] = $object->getOk();
        $values = array();
        foreach ($object->getResources() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['resources'] = $values;
        if (null !== $object->getResponseMetadata()) {
            $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}