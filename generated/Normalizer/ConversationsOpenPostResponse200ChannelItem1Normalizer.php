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
class ConversationsOpenPostResponse200ChannelItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ConversationsOpenPostResponse200ChannelItem1';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ConversationsOpenPostResponse200ChannelItem1';
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
        $object = new \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200ChannelItem1();
        if (\array_key_exists('unread_count', $data) && \is_int($data['unread_count'])) {
            $data['unread_count'] = (double) $data['unread_count'];
        }
        if (\array_key_exists('unread_count_display', $data) && \is_int($data['unread_count_display'])) {
            $data['unread_count_display'] = (double) $data['unread_count_display'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('created', $data) && $data['created'] !== null) {
            $object->setCreated($data['created']);
        }
        elseif (\array_key_exists('created', $data) && $data['created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_im', $data) && $data['is_im'] !== null) {
            $object->setIsIm($data['is_im']);
        }
        elseif (\array_key_exists('is_im', $data) && $data['is_im'] === null) {
            $object->setIsIm(null);
        }
        if (\array_key_exists('is_open', $data) && $data['is_open'] !== null) {
            $object->setIsOpen($data['is_open']);
        }
        elseif (\array_key_exists('is_open', $data) && $data['is_open'] === null) {
            $object->setIsOpen(null);
        }
        if (\array_key_exists('last_read', $data) && $data['last_read'] !== null) {
            $object->setLastRead($data['last_read']);
        }
        elseif (\array_key_exists('last_read', $data) && $data['last_read'] === null) {
            $object->setLastRead(null);
        }
        if (\array_key_exists('latest', $data) && $data['latest'] !== null) {
            $object->setLatest($this->denormalizer->denormalize($data['latest'], 'JoliCode\\Slack\\Api\\Model\\ObjsMessage', 'json', $context));
        }
        elseif (\array_key_exists('latest', $data) && $data['latest'] === null) {
            $object->setLatest(null);
        }
        if (\array_key_exists('unread_count', $data) && $data['unread_count'] !== null) {
            $object->setUnreadCount($data['unread_count']);
        }
        elseif (\array_key_exists('unread_count', $data) && $data['unread_count'] === null) {
            $object->setUnreadCount(null);
        }
        if (\array_key_exists('unread_count_display', $data) && $data['unread_count_display'] !== null) {
            $object->setUnreadCountDisplay($data['unread_count_display']);
        }
        elseif (\array_key_exists('unread_count_display', $data) && $data['unread_count_display'] === null) {
            $object->setUnreadCountDisplay(null);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        $data['id'] = $object->getId();
        if (null !== $object->getIsIm()) {
            $data['is_im'] = $object->getIsIm();
        }
        if (null !== $object->getIsOpen()) {
            $data['is_open'] = $object->getIsOpen();
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatest()) {
            $data['latest'] = $this->normalizer->normalize($object->getLatest(), 'json', $context);
        }
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data['unread_count_display'] = $object->getUnreadCountDisplay();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        return $data;
    }
}