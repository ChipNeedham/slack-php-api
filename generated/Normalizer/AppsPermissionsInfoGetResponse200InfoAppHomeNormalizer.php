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
class AppsPermissionsInfoGetResponse200InfoAppHomeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoAppHome';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoAppHome';
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
        $object = new \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoAppHome();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('resources', $data) && $data['resources'] !== null) {
            $object->setResources($this->denormalizer->denormalize($data['resources'], 'JoliCode\\Slack\\Api\\Model\\ObjsResources', 'json', $context));
        }
        elseif (\array_key_exists('resources', $data) && $data['resources'] === null) {
            $object->setResources(null);
        }
        if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
            $values = array();
            foreach ($data['scopes'] as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
        }
        elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
            $object->setScopes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getResources()) {
            $data['resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
        }
        if (null !== $object->getScopes()) {
            $values = array();
            foreach ($object->getScopes() as $value) {
                $values[] = $value;
            }
            $data['scopes'] = $values;
        }
        return $data;
    }
}