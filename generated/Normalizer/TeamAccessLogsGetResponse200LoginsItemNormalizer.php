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
class TeamAccessLogsGetResponse200LoginsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\TeamAccessLogsGetResponse200LoginsItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\TeamAccessLogsGetResponse200LoginsItem';
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
        $object = new \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data) && $data['count'] !== null) {
            $object->setCount($data['count']);
        }
        elseif (\array_key_exists('count', $data) && $data['count'] === null) {
            $object->setCount(null);
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $value = $data['country'];
            if (is_string($data['country'])) {
                $value = $data['country'];
            }
            $object->setCountry($value);
        }
        elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('date_first', $data) && $data['date_first'] !== null) {
            $object->setDateFirst($data['date_first']);
        }
        elseif (\array_key_exists('date_first', $data) && $data['date_first'] === null) {
            $object->setDateFirst(null);
        }
        if (\array_key_exists('date_last', $data) && $data['date_last'] !== null) {
            $object->setDateLast($data['date_last']);
        }
        elseif (\array_key_exists('date_last', $data) && $data['date_last'] === null) {
            $object->setDateLast(null);
        }
        if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
            $value_1 = $data['ip'];
            if (is_string($data['ip'])) {
                $value_1 = $data['ip'];
            }
            $object->setIp($value_1);
        }
        elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
            $object->setIp(null);
        }
        if (\array_key_exists('isp', $data) && $data['isp'] !== null) {
            $value_2 = $data['isp'];
            if (is_string($data['isp'])) {
                $value_2 = $data['isp'];
            }
            $object->setIsp($value_2);
        }
        elseif (\array_key_exists('isp', $data) && $data['isp'] === null) {
            $object->setIsp(null);
        }
        if (\array_key_exists('region', $data) && $data['region'] !== null) {
            $value_3 = $data['region'];
            if (is_string($data['region'])) {
                $value_3 = $data['region'];
            }
            $object->setRegion($value_3);
        }
        elseif (\array_key_exists('region', $data) && $data['region'] === null) {
            $object->setRegion(null);
        }
        if (\array_key_exists('user_agent', $data) && $data['user_agent'] !== null) {
            $object->setUserAgent($data['user_agent']);
        }
        elseif (\array_key_exists('user_agent', $data) && $data['user_agent'] === null) {
            $object->setUserAgent(null);
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
        }
        elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('username', $data) && $data['username'] !== null) {
            $object->setUsername($data['username']);
        }
        elseif (\array_key_exists('username', $data) && $data['username'] === null) {
            $object->setUsername(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['count'] = $object->getCount();
        $value = $object->getCountry();
        if (is_string($object->getCountry())) {
            $value = $object->getCountry();
        }
        $data['country'] = $value;
        $data['date_first'] = $object->getDateFirst();
        $data['date_last'] = $object->getDateLast();
        $value_1 = $object->getIp();
        if (is_string($object->getIp())) {
            $value_1 = $object->getIp();
        }
        $data['ip'] = $value_1;
        $value_2 = $object->getIsp();
        if (is_string($object->getIsp())) {
            $value_2 = $object->getIsp();
        }
        $data['isp'] = $value_2;
        $value_3 = $object->getRegion();
        if (is_string($object->getRegion())) {
            $value_3 = $object->getRegion();
        }
        $data['region'] = $value_3;
        $data['user_agent'] = $object->getUserAgent();
        $data['user_id'] = $object->getUserId();
        $data['username'] = $object->getUsername();
        return $data;
    }
}