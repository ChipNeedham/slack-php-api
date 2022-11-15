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
class TeamIntegrationLogsGetResponse200LogsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem';
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
        $object = new \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('admin_app_id', $data) && $data['admin_app_id'] !== null) {
            $object->setAdminAppId($data['admin_app_id']);
        }
        elseif (\array_key_exists('admin_app_id', $data) && $data['admin_app_id'] === null) {
            $object->setAdminAppId(null);
        }
        if (\array_key_exists('app_id', $data) && $data['app_id'] !== null) {
            $object->setAppId($data['app_id']);
        }
        elseif (\array_key_exists('app_id', $data) && $data['app_id'] === null) {
            $object->setAppId(null);
        }
        if (\array_key_exists('app_type', $data) && $data['app_type'] !== null) {
            $object->setAppType($data['app_type']);
        }
        elseif (\array_key_exists('app_type', $data) && $data['app_type'] === null) {
            $object->setAppType(null);
        }
        if (\array_key_exists('change_type', $data) && $data['change_type'] !== null) {
            $object->setChangeType($data['change_type']);
        }
        elseif (\array_key_exists('change_type', $data) && $data['change_type'] === null) {
            $object->setChangeType(null);
        }
        if (\array_key_exists('channel', $data) && $data['channel'] !== null) {
            $object->setChannel($data['channel']);
        }
        elseif (\array_key_exists('channel', $data) && $data['channel'] === null) {
            $object->setChannel(null);
        }
        if (\array_key_exists('date', $data) && $data['date'] !== null) {
            $object->setDate($data['date']);
        }
        elseif (\array_key_exists('date', $data) && $data['date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('scope', $data) && $data['scope'] !== null) {
            $object->setScope($data['scope']);
        }
        elseif (\array_key_exists('scope', $data) && $data['scope'] === null) {
            $object->setScope(null);
        }
        if (\array_key_exists('service_id', $data) && $data['service_id'] !== null) {
            $object->setServiceId($data['service_id']);
        }
        elseif (\array_key_exists('service_id', $data) && $data['service_id'] === null) {
            $object->setServiceId(null);
        }
        if (\array_key_exists('service_type', $data) && $data['service_type'] !== null) {
            $object->setServiceType($data['service_type']);
        }
        elseif (\array_key_exists('service_type', $data) && $data['service_type'] === null) {
            $object->setServiceType(null);
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
        }
        elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('user_name', $data) && $data['user_name'] !== null) {
            $object->setUserName($data['user_name']);
        }
        elseif (\array_key_exists('user_name', $data) && $data['user_name'] === null) {
            $object->setUserName(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdminAppId()) {
            $data['admin_app_id'] = $object->getAdminAppId();
        }
        $data['app_id'] = $object->getAppId();
        $data['app_type'] = $object->getAppType();
        $data['change_type'] = $object->getChangeType();
        if (null !== $object->getChannel()) {
            $data['channel'] = $object->getChannel();
        }
        $data['date'] = $object->getDate();
        $data['scope'] = $object->getScope();
        if (null !== $object->getServiceId()) {
            $data['service_id'] = $object->getServiceId();
        }
        if (null !== $object->getServiceType()) {
            $data['service_type'] = $object->getServiceType();
        }
        $data['user_id'] = $object->getUserId();
        $data['user_name'] = $object->getUserName();
        return $data;
    }
}