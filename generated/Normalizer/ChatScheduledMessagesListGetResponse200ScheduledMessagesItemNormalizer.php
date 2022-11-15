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
class ChatScheduledMessagesListGetResponse200ScheduledMessagesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ChatScheduledMessagesListGetResponse200ScheduledMessagesItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ChatScheduledMessagesListGetResponse200ScheduledMessagesItem';
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
        $object = new \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200ScheduledMessagesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channel_id', $data) && $data['channel_id'] !== null) {
            $object->setChannelId($data['channel_id']);
        }
        elseif (\array_key_exists('channel_id', $data) && $data['channel_id'] === null) {
            $object->setChannelId(null);
        }
        if (\array_key_exists('date_created', $data) && $data['date_created'] !== null) {
            $object->setDateCreated($data['date_created']);
        }
        elseif (\array_key_exists('date_created', $data) && $data['date_created'] === null) {
            $object->setDateCreated(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('post_at', $data) && $data['post_at'] !== null) {
            $value = $data['post_at'];
            if (is_int($data['post_at'])) {
                $value = $data['post_at'];
            } elseif (is_string($data['post_at'])) {
                $value = $data['post_at'];
            }
            $object->setPostAt($value);
        }
        elseif (\array_key_exists('post_at', $data) && $data['post_at'] === null) {
            $object->setPostAt(null);
        }
        if (\array_key_exists('text', $data) && $data['text'] !== null) {
            $object->setText($data['text']);
        }
        elseif (\array_key_exists('text', $data) && $data['text'] === null) {
            $object->setText(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['channel_id'] = $object->getChannelId();
        $data['date_created'] = $object->getDateCreated();
        $data['id'] = $object->getId();
        $value = $object->getPostAt();
        if (is_int($object->getPostAt())) {
            $value = $object->getPostAt();
        } elseif (is_string($object->getPostAt())) {
            $value = $object->getPostAt();
        }
        $data['post_at'] = $value;
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        return $data;
    }
}