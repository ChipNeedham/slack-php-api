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
class AppsPermissionsInfoGetResponse200InfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200Info';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200Info';
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
        $object = new \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('app_home', $data) && $data['app_home'] !== null) {
            $object->setAppHome($this->denormalizer->denormalize($data['app_home'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoAppHome', 'json', $context));
        }
        elseif (\array_key_exists('app_home', $data) && $data['app_home'] === null) {
            $object->setAppHome(null);
        }
        if (\array_key_exists('channel', $data) && $data['channel'] !== null) {
            $object->setChannel($this->denormalizer->denormalize($data['channel'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoChannel', 'json', $context));
        }
        elseif (\array_key_exists('channel', $data) && $data['channel'] === null) {
            $object->setChannel(null);
        }
        if (\array_key_exists('group', $data) && $data['group'] !== null) {
            $object->setGroup($this->denormalizer->denormalize($data['group'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoGroup', 'json', $context));
        }
        elseif (\array_key_exists('group', $data) && $data['group'] === null) {
            $object->setGroup(null);
        }
        if (\array_key_exists('im', $data) && $data['im'] !== null) {
            $object->setIm($this->denormalizer->denormalize($data['im'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoIm', 'json', $context));
        }
        elseif (\array_key_exists('im', $data) && $data['im'] === null) {
            $object->setIm(null);
        }
        if (\array_key_exists('mpim', $data) && $data['mpim'] !== null) {
            $object->setMpim($this->denormalizer->denormalize($data['mpim'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoMpim', 'json', $context));
        }
        elseif (\array_key_exists('mpim', $data) && $data['mpim'] === null) {
            $object->setMpim(null);
        }
        if (\array_key_exists('team', $data) && $data['team'] !== null) {
            $object->setTeam($this->denormalizer->denormalize($data['team'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoTeam', 'json', $context));
        }
        elseif (\array_key_exists('team', $data) && $data['team'] === null) {
            $object->setTeam(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['app_home'] = $this->normalizer->normalize($object->getAppHome(), 'json', $context);
        $data['channel'] = $this->normalizer->normalize($object->getChannel(), 'json', $context);
        $data['group'] = $this->normalizer->normalize($object->getGroup(), 'json', $context);
        $data['im'] = $this->normalizer->normalize($object->getIm(), 'json', $context);
        $data['mpim'] = $this->normalizer->normalize($object->getMpim(), 'json', $context);
        $data['team'] = $this->normalizer->normalize($object->getTeam(), 'json', $context);
        return $data;
    }
}