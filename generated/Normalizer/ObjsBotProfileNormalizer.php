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
class ObjsBotProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsBotProfile';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsBotProfile';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsBotProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('app_id', $data) && $data['app_id'] !== null) {
            $object->setAppId($data['app_id']);
        }
        elseif (\array_key_exists('app_id', $data) && $data['app_id'] === null) {
            $object->setAppId(null);
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted($data['deleted']);
        }
        elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('icons', $data) && $data['icons'] !== null) {
            $object->setIcons($this->denormalizer->denormalize($data['icons'], 'JoliCode\\Slack\\Api\\Model\\ObjsBotProfileIcons', 'json', $context));
        }
        elseif (\array_key_exists('icons', $data) && $data['icons'] === null) {
            $object->setIcons(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('team_id', $data) && $data['team_id'] !== null) {
            $object->setTeamId($data['team_id']);
        }
        elseif (\array_key_exists('team_id', $data) && $data['team_id'] === null) {
            $object->setTeamId(null);
        }
        if (\array_key_exists('updated', $data) && $data['updated'] !== null) {
            $object->setUpdated($data['updated']);
        }
        elseif (\array_key_exists('updated', $data) && $data['updated'] === null) {
            $object->setUpdated(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['app_id'] = $object->getAppId();
        $data['deleted'] = $object->getDeleted();
        $data['icons'] = $this->normalizer->normalize($object->getIcons(), 'json', $context);
        $data['id'] = $object->getId();
        $data['name'] = $object->getName();
        $data['team_id'] = $object->getTeamId();
        $data['updated'] = $object->getUpdated();
        return $data;
    }
}