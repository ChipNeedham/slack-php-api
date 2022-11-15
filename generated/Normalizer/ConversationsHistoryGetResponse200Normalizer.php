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
class ConversationsHistoryGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200';
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
        $object = new \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channel_actions_count', $data) && $data['channel_actions_count'] !== null) {
            $object->setChannelActionsCount($data['channel_actions_count']);
        }
        elseif (\array_key_exists('channel_actions_count', $data) && $data['channel_actions_count'] === null) {
            $object->setChannelActionsCount(null);
        }
        if (\array_key_exists('channel_actions_ts', $data) && $data['channel_actions_ts'] !== null) {
            $object->setChannelActionsTs($data['channel_actions_ts']);
        }
        elseif (\array_key_exists('channel_actions_ts', $data) && $data['channel_actions_ts'] === null) {
            $object->setChannelActionsTs(null);
        }
        if (\array_key_exists('has_more', $data) && $data['has_more'] !== null) {
            $object->setHasMore($data['has_more']);
        }
        elseif (\array_key_exists('has_more', $data) && $data['has_more'] === null) {
            $object->setHasMore(null);
        }
        if (\array_key_exists('messages', $data) && $data['messages'] !== null) {
            $values = array();
            foreach ($data['messages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessage', 'json', $context);
            }
            $object->setMessages($values);
        }
        elseif (\array_key_exists('messages', $data) && $data['messages'] === null) {
            $object->setMessages(null);
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
        }
        if (\array_key_exists('pin_count', $data) && $data['pin_count'] !== null) {
            $object->setPinCount($data['pin_count']);
        }
        elseif (\array_key_exists('pin_count', $data) && $data['pin_count'] === null) {
            $object->setPinCount(null);
        }
        if (\array_key_exists('response_metadata', $data) && $data['response_metadata'] !== null) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200ResponseMetadata', 'json', $context));
        }
        elseif (\array_key_exists('response_metadata', $data) && $data['response_metadata'] === null) {
            $object->setResponseMetadata(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['channel_actions_count'] = $object->getChannelActionsCount();
        $data['channel_actions_ts'] = $object->getChannelActionsTs();
        $data['has_more'] = $object->getHasMore();
        $values = array();
        foreach ($object->getMessages() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['messages'] = $values;
        $data['ok'] = $object->getOk();
        $data['pin_count'] = $object->getPinCount();
        if (null !== $object->getResponseMetadata()) {
            $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        }
        return $data;
    }
}