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
class ObjsChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsChannel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsChannel';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsChannel();
        if (\array_key_exists('priority', $data) && \is_int($data['priority'])) {
            $data['priority'] = (double) $data['priority'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accepted_user', $data) && $data['accepted_user'] !== null) {
            $object->setAcceptedUser($data['accepted_user']);
        }
        elseif (\array_key_exists('accepted_user', $data) && $data['accepted_user'] === null) {
            $object->setAcceptedUser(null);
        }
        if (\array_key_exists('created', $data) && $data['created'] !== null) {
            $object->setCreated($data['created']);
        }
        elseif (\array_key_exists('created', $data) && $data['created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($data['creator']);
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_archived', $data) && $data['is_archived'] !== null) {
            $object->setIsArchived($data['is_archived']);
        }
        elseif (\array_key_exists('is_archived', $data) && $data['is_archived'] === null) {
            $object->setIsArchived(null);
        }
        if (\array_key_exists('is_channel', $data) && $data['is_channel'] !== null) {
            $object->setIsChannel($data['is_channel']);
        }
        elseif (\array_key_exists('is_channel', $data) && $data['is_channel'] === null) {
            $object->setIsChannel(null);
        }
        if (\array_key_exists('is_frozen', $data) && $data['is_frozen'] !== null) {
            $object->setIsFrozen($data['is_frozen']);
        }
        elseif (\array_key_exists('is_frozen', $data) && $data['is_frozen'] === null) {
            $object->setIsFrozen(null);
        }
        if (\array_key_exists('is_general', $data) && $data['is_general'] !== null) {
            $object->setIsGeneral($data['is_general']);
        }
        elseif (\array_key_exists('is_general', $data) && $data['is_general'] === null) {
            $object->setIsGeneral(null);
        }
        if (\array_key_exists('is_member', $data) && $data['is_member'] !== null) {
            $object->setIsMember($data['is_member']);
        }
        elseif (\array_key_exists('is_member', $data) && $data['is_member'] === null) {
            $object->setIsMember(null);
        }
        if (\array_key_exists('is_moved', $data) && $data['is_moved'] !== null) {
            $object->setIsMoved($data['is_moved']);
        }
        elseif (\array_key_exists('is_moved', $data) && $data['is_moved'] === null) {
            $object->setIsMoved(null);
        }
        if (\array_key_exists('is_mpim', $data) && $data['is_mpim'] !== null) {
            $object->setIsMpim($data['is_mpim']);
        }
        elseif (\array_key_exists('is_mpim', $data) && $data['is_mpim'] === null) {
            $object->setIsMpim(null);
        }
        if (\array_key_exists('is_non_threadable', $data) && $data['is_non_threadable'] !== null) {
            $object->setIsNonThreadable($data['is_non_threadable']);
        }
        elseif (\array_key_exists('is_non_threadable', $data) && $data['is_non_threadable'] === null) {
            $object->setIsNonThreadable(null);
        }
        if (\array_key_exists('is_org_shared', $data) && $data['is_org_shared'] !== null) {
            $object->setIsOrgShared($data['is_org_shared']);
        }
        elseif (\array_key_exists('is_org_shared', $data) && $data['is_org_shared'] === null) {
            $object->setIsOrgShared(null);
        }
        if (\array_key_exists('is_pending_ext_shared', $data) && $data['is_pending_ext_shared'] !== null) {
            $object->setIsPendingExtShared($data['is_pending_ext_shared']);
        }
        elseif (\array_key_exists('is_pending_ext_shared', $data) && $data['is_pending_ext_shared'] === null) {
            $object->setIsPendingExtShared(null);
        }
        if (\array_key_exists('is_private', $data) && $data['is_private'] !== null) {
            $object->setIsPrivate($data['is_private']);
        }
        elseif (\array_key_exists('is_private', $data) && $data['is_private'] === null) {
            $object->setIsPrivate(null);
        }
        if (\array_key_exists('is_read_only', $data) && $data['is_read_only'] !== null) {
            $object->setIsReadOnly($data['is_read_only']);
        }
        elseif (\array_key_exists('is_read_only', $data) && $data['is_read_only'] === null) {
            $object->setIsReadOnly(null);
        }
        if (\array_key_exists('is_shared', $data) && $data['is_shared'] !== null) {
            $object->setIsShared($data['is_shared']);
        }
        elseif (\array_key_exists('is_shared', $data) && $data['is_shared'] === null) {
            $object->setIsShared(null);
        }
        if (\array_key_exists('is_thread_only', $data) && $data['is_thread_only'] !== null) {
            $object->setIsThreadOnly($data['is_thread_only']);
        }
        elseif (\array_key_exists('is_thread_only', $data) && $data['is_thread_only'] === null) {
            $object->setIsThreadOnly(null);
        }
        if (\array_key_exists('last_read', $data) && $data['last_read'] !== null) {
            $object->setLastRead($data['last_read']);
        }
        elseif (\array_key_exists('last_read', $data) && $data['last_read'] === null) {
            $object->setLastRead(null);
        }
        if (\array_key_exists('latest', $data) && $data['latest'] !== null) {
            $object->setLatest($data['latest']);
        }
        elseif (\array_key_exists('latest', $data) && $data['latest'] === null) {
            $object->setLatest(null);
        }
        if (\array_key_exists('members', $data) && $data['members'] !== null) {
            $values = array();
            foreach ($data['members'] as $value) {
                $values[] = $value;
            }
            $object->setMembers($values);
        }
        elseif (\array_key_exists('members', $data) && $data['members'] === null) {
            $object->setMembers(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('name_normalized', $data) && $data['name_normalized'] !== null) {
            $object->setNameNormalized($data['name_normalized']);
        }
        elseif (\array_key_exists('name_normalized', $data) && $data['name_normalized'] === null) {
            $object->setNameNormalized(null);
        }
        if (\array_key_exists('num_members', $data) && $data['num_members'] !== null) {
            $object->setNumMembers($data['num_members']);
        }
        elseif (\array_key_exists('num_members', $data) && $data['num_members'] === null) {
            $object->setNumMembers(null);
        }
        if (\array_key_exists('pending_shared', $data) && $data['pending_shared'] !== null) {
            $values_1 = array();
            foreach ($data['pending_shared'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPendingShared($values_1);
        }
        elseif (\array_key_exists('pending_shared', $data) && $data['pending_shared'] === null) {
            $object->setPendingShared(null);
        }
        if (\array_key_exists('previous_names', $data) && $data['previous_names'] !== null) {
            $values_2 = array();
            foreach ($data['previous_names'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPreviousNames($values_2);
        }
        elseif (\array_key_exists('previous_names', $data) && $data['previous_names'] === null) {
            $object->setPreviousNames(null);
        }
        if (\array_key_exists('priority', $data) && $data['priority'] !== null) {
            $object->setPriority($data['priority']);
        }
        elseif (\array_key_exists('priority', $data) && $data['priority'] === null) {
            $object->setPriority(null);
        }
        if (\array_key_exists('purpose', $data) && $data['purpose'] !== null) {
            $object->setPurpose($this->denormalizer->denormalize($data['purpose'], 'JoliCode\\Slack\\Api\\Model\\ObjsChannelPurpose', 'json', $context));
        }
        elseif (\array_key_exists('purpose', $data) && $data['purpose'] === null) {
            $object->setPurpose(null);
        }
        if (\array_key_exists('topic', $data) && $data['topic'] !== null) {
            $object->setTopic($this->denormalizer->denormalize($data['topic'], 'JoliCode\\Slack\\Api\\Model\\ObjsChannelTopic', 'json', $context));
        }
        elseif (\array_key_exists('topic', $data) && $data['topic'] === null) {
            $object->setTopic(null);
        }
        if (\array_key_exists('unlinked', $data) && $data['unlinked'] !== null) {
            $object->setUnlinked($data['unlinked']);
        }
        elseif (\array_key_exists('unlinked', $data) && $data['unlinked'] === null) {
            $object->setUnlinked(null);
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
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAcceptedUser()) {
            $data['accepted_user'] = $object->getAcceptedUser();
        }
        $data['created'] = $object->getCreated();
        $data['creator'] = $object->getCreator();
        $data['id'] = $object->getId();
        if (null !== $object->getIsArchived()) {
            $data['is_archived'] = $object->getIsArchived();
        }
        $data['is_channel'] = $object->getIsChannel();
        if (null !== $object->getIsFrozen()) {
            $data['is_frozen'] = $object->getIsFrozen();
        }
        if (null !== $object->getIsGeneral()) {
            $data['is_general'] = $object->getIsGeneral();
        }
        if (null !== $object->getIsMember()) {
            $data['is_member'] = $object->getIsMember();
        }
        if (null !== $object->getIsMoved()) {
            $data['is_moved'] = $object->getIsMoved();
        }
        $data['is_mpim'] = $object->getIsMpim();
        if (null !== $object->getIsNonThreadable()) {
            $data['is_non_threadable'] = $object->getIsNonThreadable();
        }
        $data['is_org_shared'] = $object->getIsOrgShared();
        if (null !== $object->getIsPendingExtShared()) {
            $data['is_pending_ext_shared'] = $object->getIsPendingExtShared();
        }
        $data['is_private'] = $object->getIsPrivate();
        if (null !== $object->getIsReadOnly()) {
            $data['is_read_only'] = $object->getIsReadOnly();
        }
        $data['is_shared'] = $object->getIsShared();
        if (null !== $object->getIsThreadOnly()) {
            $data['is_thread_only'] = $object->getIsThreadOnly();
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatest()) {
            $data['latest'] = $object->getLatest();
        }
        $values = array();
        foreach ($object->getMembers() as $value) {
            $values[] = $value;
        }
        $data['members'] = $values;
        $data['name'] = $object->getName();
        $data['name_normalized'] = $object->getNameNormalized();
        if (null !== $object->getNumMembers()) {
            $data['num_members'] = $object->getNumMembers();
        }
        if (null !== $object->getPendingShared()) {
            $values_1 = array();
            foreach ($object->getPendingShared() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['pending_shared'] = $values_1;
        }
        if (null !== $object->getPreviousNames()) {
            $values_2 = array();
            foreach ($object->getPreviousNames() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['previous_names'] = $values_2;
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        $data['purpose'] = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        $data['topic'] = $this->normalizer->normalize($object->getTopic(), 'json', $context);
        if (null !== $object->getUnlinked()) {
            $data['unlinked'] = $object->getUnlinked();
        }
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data['unread_count_display'] = $object->getUnreadCountDisplay();
        }
        return $data;
    }
}