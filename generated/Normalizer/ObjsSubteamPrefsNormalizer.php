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
class ObjsSubteamPrefsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsSubteamPrefs';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsSubteamPrefs';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsSubteamPrefs();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channels', $data) && $data['channels'] !== null) {
            $values = array();
            foreach ($data['channels'] as $value) {
                $values[] = $value;
            }
            $object->setChannels($values);
        }
        elseif (\array_key_exists('channels', $data) && $data['channels'] === null) {
            $object->setChannels(null);
        }
        if (\array_key_exists('groups', $data) && $data['groups'] !== null) {
            $values_1 = array();
            foreach ($data['groups'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setGroups($values_1);
        }
        elseif (\array_key_exists('groups', $data) && $data['groups'] === null) {
            $object->setGroups(null);
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
        foreach ($object->getChannels() as $value) {
            $values[] = $value;
        }
        $data['channels'] = $values;
        $values_1 = array();
        foreach ($object->getGroups() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['groups'] = $values_1;
        return $data;
    }
}