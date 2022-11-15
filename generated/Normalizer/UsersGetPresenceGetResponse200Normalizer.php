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
class UsersGetPresenceGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200';
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
        $object = new \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('auto_away', $data) && $data['auto_away'] !== null) {
            $object->setAutoAway($data['auto_away']);
            unset($data['auto_away']);
        }
        elseif (\array_key_exists('auto_away', $data) && $data['auto_away'] === null) {
            $object->setAutoAway(null);
        }
        if (\array_key_exists('connection_count', $data) && $data['connection_count'] !== null) {
            $object->setConnectionCount($data['connection_count']);
            unset($data['connection_count']);
        }
        elseif (\array_key_exists('connection_count', $data) && $data['connection_count'] === null) {
            $object->setConnectionCount(null);
        }
        if (\array_key_exists('last_activity', $data) && $data['last_activity'] !== null) {
            $object->setLastActivity($data['last_activity']);
            unset($data['last_activity']);
        }
        elseif (\array_key_exists('last_activity', $data) && $data['last_activity'] === null) {
            $object->setLastActivity(null);
        }
        if (\array_key_exists('manual_away', $data) && $data['manual_away'] !== null) {
            $object->setManualAway($data['manual_away']);
            unset($data['manual_away']);
        }
        elseif (\array_key_exists('manual_away', $data) && $data['manual_away'] === null) {
            $object->setManualAway(null);
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
            unset($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
        }
        if (\array_key_exists('online', $data) && $data['online'] !== null) {
            $object->setOnline($data['online']);
            unset($data['online']);
        }
        elseif (\array_key_exists('online', $data) && $data['online'] === null) {
            $object->setOnline(null);
        }
        if (\array_key_exists('presence', $data) && $data['presence'] !== null) {
            $object->setPresence($data['presence']);
            unset($data['presence']);
        }
        elseif (\array_key_exists('presence', $data) && $data['presence'] === null) {
            $object->setPresence(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if (null !== $object->getAutoAway()) {
            $data['auto_away'] = $object->getAutoAway();
        }
        if (null !== $object->getConnectionCount()) {
            $data['connection_count'] = $object->getConnectionCount();
        }
        if (null !== $object->getLastActivity()) {
            $data['last_activity'] = $object->getLastActivity();
        }
        if (null !== $object->getManualAway()) {
            $data['manual_away'] = $object->getManualAway();
        }
        $data['ok'] = $object->getOk();
        if (null !== $object->getOnline()) {
            $data['online'] = $object->getOnline();
        }
        $data['presence'] = $object->getPresence();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}