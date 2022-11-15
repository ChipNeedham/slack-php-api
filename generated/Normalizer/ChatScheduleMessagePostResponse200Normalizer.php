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
class ChatScheduleMessagePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200';
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
        $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channel', $data) && $data['channel'] !== null) {
            $object->setChannel($data['channel']);
        }
        elseif (\array_key_exists('channel', $data) && $data['channel'] === null) {
            $object->setChannel(null);
        }
        if (\array_key_exists('message', $data) && $data['message'] !== null) {
            $object->setMessage($this->denormalizer->denormalize($data['message'], 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message', 'json', $context));
        }
        elseif (\array_key_exists('message', $data) && $data['message'] === null) {
            $object->setMessage(null);
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
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
        if (\array_key_exists('scheduled_message_id', $data) && $data['scheduled_message_id'] !== null) {
            $object->setScheduledMessageId($data['scheduled_message_id']);
        }
        elseif (\array_key_exists('scheduled_message_id', $data) && $data['scheduled_message_id'] === null) {
            $object->setScheduledMessageId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['channel'] = $object->getChannel();
        $data['message'] = $this->normalizer->normalize($object->getMessage(), 'json', $context);
        $data['ok'] = $object->getOk();
        $value = $object->getPostAt();
        if (is_int($object->getPostAt())) {
            $value = $object->getPostAt();
        } elseif (is_string($object->getPostAt())) {
            $value = $object->getPostAt();
        }
        $data['post_at'] = $value;
        $data['scheduled_message_id'] = $object->getScheduledMessageId();
        return $data;
    }
}