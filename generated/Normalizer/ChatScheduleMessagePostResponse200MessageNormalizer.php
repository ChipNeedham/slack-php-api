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
class ChatScheduleMessagePostResponse200MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message';
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
        $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attachments', $data) && $data['attachments'] !== null) {
            $values = array();
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200MessageAttachmentsItem', 'json', $context);
            }
            $object->setAttachments($values);
        }
        elseif (\array_key_exists('attachments', $data) && $data['attachments'] === null) {
            $object->setAttachments(null);
        }
        if (\array_key_exists('bot_id', $data) && $data['bot_id'] !== null) {
            $object->setBotId($data['bot_id']);
        }
        elseif (\array_key_exists('bot_id', $data) && $data['bot_id'] === null) {
            $object->setBotId(null);
        }
        if (\array_key_exists('bot_profile', $data) && $data['bot_profile'] !== null) {
            $object->setBotProfile($this->denormalizer->denormalize($data['bot_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsBotProfile', 'json', $context));
        }
        elseif (\array_key_exists('bot_profile', $data) && $data['bot_profile'] === null) {
            $object->setBotProfile(null);
        }
        if (\array_key_exists('subtype', $data) && $data['subtype'] !== null) {
            $object->setSubtype($data['subtype']);
        }
        elseif (\array_key_exists('subtype', $data) && $data['subtype'] === null) {
            $object->setSubtype(null);
        }
        if (\array_key_exists('team', $data) && $data['team'] !== null) {
            $object->setTeam($data['team']);
        }
        elseif (\array_key_exists('team', $data) && $data['team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('text', $data) && $data['text'] !== null) {
            $object->setText($data['text']);
        }
        elseif (\array_key_exists('text', $data) && $data['text'] === null) {
            $object->setText(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
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
        if (null !== $object->getAttachments()) {
            $values = array();
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['attachments'] = $values;
        }
        $data['bot_id'] = $object->getBotId();
        if (null !== $object->getBotProfile()) {
            $data['bot_profile'] = $this->normalizer->normalize($object->getBotProfile(), 'json', $context);
        }
        if (null !== $object->getSubtype()) {
            $data['subtype'] = $object->getSubtype();
        }
        $data['team'] = $object->getTeam();
        $data['text'] = $object->getText();
        $data['type'] = $object->getType();
        $data['user'] = $object->getUser();
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        return $data;
    }
}