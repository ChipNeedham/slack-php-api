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
class DndEndSnoozePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\DndEndSnoozePostResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\DndEndSnoozePostResponse200';
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
        $object = new \JoliCode\Slack\Api\Model\DndEndSnoozePostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dnd_enabled', $data) && $data['dnd_enabled'] !== null) {
            $object->setDndEnabled($data['dnd_enabled']);
        }
        elseif (\array_key_exists('dnd_enabled', $data) && $data['dnd_enabled'] === null) {
            $object->setDndEnabled(null);
        }
        if (\array_key_exists('next_dnd_end_ts', $data) && $data['next_dnd_end_ts'] !== null) {
            $object->setNextDndEndTs($data['next_dnd_end_ts']);
        }
        elseif (\array_key_exists('next_dnd_end_ts', $data) && $data['next_dnd_end_ts'] === null) {
            $object->setNextDndEndTs(null);
        }
        if (\array_key_exists('next_dnd_start_ts', $data) && $data['next_dnd_start_ts'] !== null) {
            $object->setNextDndStartTs($data['next_dnd_start_ts']);
        }
        elseif (\array_key_exists('next_dnd_start_ts', $data) && $data['next_dnd_start_ts'] === null) {
            $object->setNextDndStartTs(null);
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
        }
        if (\array_key_exists('snooze_enabled', $data) && $data['snooze_enabled'] !== null) {
            $object->setSnoozeEnabled($data['snooze_enabled']);
        }
        elseif (\array_key_exists('snooze_enabled', $data) && $data['snooze_enabled'] === null) {
            $object->setSnoozeEnabled(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['dnd_enabled'] = $object->getDndEnabled();
        $data['next_dnd_end_ts'] = $object->getNextDndEndTs();
        $data['next_dnd_start_ts'] = $object->getNextDndStartTs();
        $data['ok'] = $object->getOk();
        $data['snooze_enabled'] = $object->getSnoozeEnabled();
        return $data;
    }
}