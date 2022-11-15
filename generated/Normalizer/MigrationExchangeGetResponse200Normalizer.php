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
class MigrationExchangeGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200';
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
        $object = new \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enterprise_id', $data) && $data['enterprise_id'] !== null) {
            $object->setEnterpriseId($data['enterprise_id']);
            unset($data['enterprise_id']);
        }
        elseif (\array_key_exists('enterprise_id', $data) && $data['enterprise_id'] === null) {
            $object->setEnterpriseId(null);
        }
        if (\array_key_exists('invalid_user_ids', $data) && $data['invalid_user_ids'] !== null) {
            $values = array();
            foreach ($data['invalid_user_ids'] as $value) {
                $values[] = $value;
            }
            $object->setInvalidUserIds($values);
            unset($data['invalid_user_ids']);
        }
        elseif (\array_key_exists('invalid_user_ids', $data) && $data['invalid_user_ids'] === null) {
            $object->setInvalidUserIds(null);
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
            unset($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
        }
        if (\array_key_exists('team_id', $data) && $data['team_id'] !== null) {
            $object->setTeamId($data['team_id']);
            unset($data['team_id']);
        }
        elseif (\array_key_exists('team_id', $data) && $data['team_id'] === null) {
            $object->setTeamId(null);
        }
        if (\array_key_exists('user_id_map', $data) && $data['user_id_map'] !== null) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['user_id_map'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setUserIdMap($values_1);
            unset($data['user_id_map']);
        }
        elseif (\array_key_exists('user_id_map', $data) && $data['user_id_map'] === null) {
            $object->setUserIdMap(null);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
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
        $data['enterprise_id'] = $object->getEnterpriseId();
        if (null !== $object->getInvalidUserIds()) {
            $values = array();
            foreach ($object->getInvalidUserIds() as $value) {
                $values[] = $value;
            }
            $data['invalid_user_ids'] = $values;
        }
        $data['ok'] = $object->getOk();
        $data['team_id'] = $object->getTeamId();
        if (null !== $object->getUserIdMap()) {
            $values_1 = array();
            foreach ($object->getUserIdMap() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['user_id_map'] = $values_1;
        }
        foreach ($object as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_2;
            }
        }
        return $data;
    }
}