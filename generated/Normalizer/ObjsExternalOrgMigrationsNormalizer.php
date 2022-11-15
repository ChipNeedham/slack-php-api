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
class ObjsExternalOrgMigrationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsExternalOrgMigrations';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsExternalOrgMigrations';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('current', $data) && $data['current'] !== null) {
            $values = array();
            foreach ($data['current'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsExternalOrgMigrationsCurrentItem', 'json', $context);
            }
            $object->setCurrent($values);
        }
        elseif (\array_key_exists('current', $data) && $data['current'] === null) {
            $object->setCurrent(null);
        }
        if (\array_key_exists('date_updated', $data) && $data['date_updated'] !== null) {
            $object->setDateUpdated($data['date_updated']);
        }
        elseif (\array_key_exists('date_updated', $data) && $data['date_updated'] === null) {
            $object->setDateUpdated(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getCurrent() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['current'] = $values;
        $data['date_updated'] = $object->getDateUpdated();
        return $data;
    }
}