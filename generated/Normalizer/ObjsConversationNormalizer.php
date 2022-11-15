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
class ObjsConversationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsConversation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsConversation';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsConversation();
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
        if (\array_key_exists('connected_team_ids', $data) && $data['connected_team_ids'] !== null) {
            $values = array();
            foreach ($data['connected_team_ids'] as $value) {
                $values[] = $value;
            }
            $object->setConnectedTeamIds($values);
        }
        elseif (\array_key_exists('connected_team_ids', $data) && $data['connected_team_ids'] === null) {
            $object->setConnectedTeamIds(null);
        }
        if (\array_key_exists('conversation_host_id', $data) && $data['conversation_host_id'] !== null) {
            $object->setConversationHostId($data['conversation_host_id']);
        }
        elseif (\array_key_exists('conversation_host_id', $data) && $data['conversation_host_id'] === null) {
            $object->setConversationHostId(null);
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
        if (\array_key_exists('display_counts', $data) && $data['display_counts'] !== null) {
            $object->setDisplayCounts($this->denormalizer->denormalize($data['display_counts'], 'JoliCode\\Slack\\Api\\Model\\ObjsConversationDisplayCounts', 'json', $context));
        }
        elseif (\array_key_exists('display_counts', $data) && $data['display_counts'] === null) {
            $object->setDisplayCounts(null);
        }
        if (\array_key_exists('enterprise_id', $data) && $data['enterprise_id'] !== null) {
            $object->setEnterpriseId($data['enterprise_id']);
        }
        elseif (\array_key_exists('enterprise_id', $data) && $data['enterprise_id'] === null) {
            $object->setEnterpriseId(null);
        }
        if (\array_key_exists('has_pins', $data) && $data['has_pins'] !== null) {
            $object->setHasPins($data['has_pins']);
        }
        elseif (\array_key_exists('has_pins', $data) && $data['has_pins'] === null) {
            $object->setHasPins(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('internal_team_ids', $data) && $data['internal_team_ids'] !== null) {
            $values_1 = array();
            foreach ($data['internal_team_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setInternalTeamIds($values_1);
        }
        elseif (\array_key_exists('internal_team_ids', $data) && $data['internal_team_ids'] === null) {
            $object->setInternalTeamIds(null);
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
        if (\array_key_exists('is_ext_shared', $data) && $data['is_ext_shared'] !== null) {
            $object->setIsExtShared($data['is_ext_shared']);
        }
        elseif (\array_key_exists('is_ext_shared', $data) && $data['is_ext_shared'] === null) {
            $object->setIsExtShared(null);
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
        if (\array_key_exists('is_global_shared', $data) && $data['is_global_shared'] !== null) {
            $object->setIsGlobalShared($data['is_global_shared']);
        }
        elseif (\array_key_exists('is_global_shared', $data) && $data['is_global_shared'] === null) {
            $object->setIsGlobalShared(null);
        }
        if (\array_key_exists('is_group', $data) && $data['is_group'] !== null) {
            $object->setIsGroup($data['is_group']);
        }
        elseif (\array_key_exists('is_group', $data) && $data['is_group'] === null) {
            $object->setIsGroup(null);
        }
        if (\array_key_exists('is_im', $data) && $data['is_im'] !== null) {
            $object->setIsIm($data['is_im']);
        }
        elseif (\array_key_exists('is_im', $data) && $data['is_im'] === null) {
            $object->setIsIm(null);
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
        if (\array_key_exists('is_open', $data) && $data['is_open'] !== null) {
            $object->setIsOpen($data['is_open']);
        }
        elseif (\array_key_exists('is_open', $data) && $data['is_open'] === null) {
            $object->setIsOpen(null);
        }
        if (\array_key_exists('is_org_default', $data) && $data['is_org_default'] !== null) {
            $object->setIsOrgDefault($data['is_org_default']);
        }
        elseif (\array_key_exists('is_org_default', $data) && $data['is_org_default'] === null) {
            $object->setIsOrgDefault(null);
        }
        if (\array_key_exists('is_org_mandatory', $data) && $data['is_org_mandatory'] !== null) {
            $object->setIsOrgMandatory($data['is_org_mandatory']);
        }
        elseif (\array_key_exists('is_org_mandatory', $data) && $data['is_org_mandatory'] === null) {
            $object->setIsOrgMandatory(null);
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
        if (\array_key_exists('is_starred', $data) && $data['is_starred'] !== null) {
            $object->setIsStarred($data['is_starred']);
        }
        elseif (\array_key_exists('is_starred', $data) && $data['is_starred'] === null) {
            $object->setIsStarred(null);
        }
        if (\array_key_exists('is_thread_only', $data) && $data['is_thread_only'] !== null) {
            $object->setIsThreadOnly($data['is_thread_only']);
        }
        elseif (\array_key_exists('is_thread_only', $data) && $data['is_thread_only'] === null) {
            $object->setIsThreadOnly(null);
        }
        if (\array_key_exists('is_user_deleted', $data) && $data['is_user_deleted'] !== null) {
            $object->setIsUserDeleted($data['is_user_deleted']);
        }
        elseif (\array_key_exists('is_user_deleted', $data) && $data['is_user_deleted'] === null) {
            $object->setIsUserDeleted(null);
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
        if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
            $object->setLocale($data['locale']);
        }
        elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
            $object->setLocale(null);
        }
        if (\array_key_exists('members', $data) && $data['members'] !== null) {
            $values_2 = array();
            foreach ($data['members'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setMembers($values_2);
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
        if (\array_key_exists('parent_conversation', $data) && $data['parent_conversation'] !== null) {
            $object->setParentConversation($data['parent_conversation']);
        }
        elseif (\array_key_exists('parent_conversation', $data) && $data['parent_conversation'] === null) {
            $object->setParentConversation(null);
        }
        if (\array_key_exists('pending_connected_team_ids', $data) && $data['pending_connected_team_ids'] !== null) {
            $values_3 = array();
            foreach ($data['pending_connected_team_ids'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPendingConnectedTeamIds($values_3);
        }
        elseif (\array_key_exists('pending_connected_team_ids', $data) && $data['pending_connected_team_ids'] === null) {
            $object->setPendingConnectedTeamIds(null);
        }
        if (\array_key_exists('pending_shared', $data) && $data['pending_shared'] !== null) {
            $values_4 = array();
            foreach ($data['pending_shared'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPendingShared($values_4);
        }
        elseif (\array_key_exists('pending_shared', $data) && $data['pending_shared'] === null) {
            $object->setPendingShared(null);
        }
        if (\array_key_exists('pin_count', $data) && $data['pin_count'] !== null) {
            $object->setPinCount($data['pin_count']);
        }
        elseif (\array_key_exists('pin_count', $data) && $data['pin_count'] === null) {
            $object->setPinCount(null);
        }
        if (\array_key_exists('previous_names', $data) && $data['previous_names'] !== null) {
            $values_5 = array();
            foreach ($data['previous_names'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setPreviousNames($values_5);
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
            $object->setPurpose($this->denormalizer->denormalize($data['purpose'], 'JoliCode\\Slack\\Api\\Model\\ObjsConversationPurpose', 'json', $context));
        }
        elseif (\array_key_exists('purpose', $data) && $data['purpose'] === null) {
            $object->setPurpose(null);
        }
        if (\array_key_exists('shared_team_ids', $data) && $data['shared_team_ids'] !== null) {
            $values_6 = array();
            foreach ($data['shared_team_ids'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setSharedTeamIds($values_6);
        }
        elseif (\array_key_exists('shared_team_ids', $data) && $data['shared_team_ids'] === null) {
            $object->setSharedTeamIds(null);
        }
        if (\array_key_exists('shares', $data) && $data['shares'] !== null) {
            $values_7 = array();
            foreach ($data['shares'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationSharesItem', 'json', $context);
            }
            $object->setShares($values_7);
        }
        elseif (\array_key_exists('shares', $data) && $data['shares'] === null) {
            $object->setShares(null);
        }
        if (\array_key_exists('timezone_count', $data) && $data['timezone_count'] !== null) {
            $object->setTimezoneCount($data['timezone_count']);
        }
        elseif (\array_key_exists('timezone_count', $data) && $data['timezone_count'] === null) {
            $object->setTimezoneCount(null);
        }
        if (\array_key_exists('topic', $data) && $data['topic'] !== null) {
            $object->setTopic($this->denormalizer->denormalize($data['topic'], 'JoliCode\\Slack\\Api\\Model\\ObjsConversationTopic', 'json', $context));
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
        if (\array_key_exists('use_case', $data) && $data['use_case'] !== null) {
            $object->setUseCase($data['use_case']);
        }
        elseif (\array_key_exists('use_case', $data) && $data['use_case'] === null) {
            $object->setUseCase(null);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
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
        if (null !== $object->getConnectedTeamIds()) {
            $values = array();
            foreach ($object->getConnectedTeamIds() as $value) {
                $values[] = $value;
            }
            $data['connected_team_ids'] = $values;
        }
        if (null !== $object->getConversationHostId()) {
            $data['conversation_host_id'] = $object->getConversationHostId();
        }
        $data['created'] = $object->getCreated();
        if (null !== $object->getCreator()) {
            $data['creator'] = $object->getCreator();
        }
        if (null !== $object->getDisplayCounts()) {
            $data['display_counts'] = $this->normalizer->normalize($object->getDisplayCounts(), 'json', $context);
        }
        if (null !== $object->getEnterpriseId()) {
            $data['enterprise_id'] = $object->getEnterpriseId();
        }
        if (null !== $object->getHasPins()) {
            $data['has_pins'] = $object->getHasPins();
        }
        $data['id'] = $object->getId();
        if (null !== $object->getInternalTeamIds()) {
            $values_1 = array();
            foreach ($object->getInternalTeamIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['internal_team_ids'] = $values_1;
        }
        if (null !== $object->getIsArchived()) {
            $data['is_archived'] = $object->getIsArchived();
        }
        if (null !== $object->getIsChannel()) {
            $data['is_channel'] = $object->getIsChannel();
        }
        if (null !== $object->getIsExtShared()) {
            $data['is_ext_shared'] = $object->getIsExtShared();
        }
        if (null !== $object->getIsFrozen()) {
            $data['is_frozen'] = $object->getIsFrozen();
        }
        if (null !== $object->getIsGeneral()) {
            $data['is_general'] = $object->getIsGeneral();
        }
        if (null !== $object->getIsGlobalShared()) {
            $data['is_global_shared'] = $object->getIsGlobalShared();
        }
        if (null !== $object->getIsGroup()) {
            $data['is_group'] = $object->getIsGroup();
        }
        $data['is_im'] = $object->getIsIm();
        if (null !== $object->getIsMember()) {
            $data['is_member'] = $object->getIsMember();
        }
        if (null !== $object->getIsMoved()) {
            $data['is_moved'] = $object->getIsMoved();
        }
        if (null !== $object->getIsMpim()) {
            $data['is_mpim'] = $object->getIsMpim();
        }
        if (null !== $object->getIsNonThreadable()) {
            $data['is_non_threadable'] = $object->getIsNonThreadable();
        }
        if (null !== $object->getIsOpen()) {
            $data['is_open'] = $object->getIsOpen();
        }
        if (null !== $object->getIsOrgDefault()) {
            $data['is_org_default'] = $object->getIsOrgDefault();
        }
        if (null !== $object->getIsOrgMandatory()) {
            $data['is_org_mandatory'] = $object->getIsOrgMandatory();
        }
        $data['is_org_shared'] = $object->getIsOrgShared();
        if (null !== $object->getIsPendingExtShared()) {
            $data['is_pending_ext_shared'] = $object->getIsPendingExtShared();
        }
        if (null !== $object->getIsPrivate()) {
            $data['is_private'] = $object->getIsPrivate();
        }
        if (null !== $object->getIsReadOnly()) {
            $data['is_read_only'] = $object->getIsReadOnly();
        }
        if (null !== $object->getIsShared()) {
            $data['is_shared'] = $object->getIsShared();
        }
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        }
        if (null !== $object->getIsThreadOnly()) {
            $data['is_thread_only'] = $object->getIsThreadOnly();
        }
        if (null !== $object->getIsUserDeleted()) {
            $data['is_user_deleted'] = $object->getIsUserDeleted();
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatest()) {
            $data['latest'] = $object->getLatest();
        }
        if (null !== $object->getLocale()) {
            $data['locale'] = $object->getLocale();
        }
        if (null !== $object->getMembers()) {
            $values_2 = array();
            foreach ($object->getMembers() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['members'] = $values_2;
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNameNormalized()) {
            $data['name_normalized'] = $object->getNameNormalized();
        }
        if (null !== $object->getNumMembers()) {
            $data['num_members'] = $object->getNumMembers();
        }
        if (null !== $object->getParentConversation()) {
            $data['parent_conversation'] = $object->getParentConversation();
        }
        if (null !== $object->getPendingConnectedTeamIds()) {
            $values_3 = array();
            foreach ($object->getPendingConnectedTeamIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['pending_connected_team_ids'] = $values_3;
        }
        if (null !== $object->getPendingShared()) {
            $values_4 = array();
            foreach ($object->getPendingShared() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['pending_shared'] = $values_4;
        }
        if (null !== $object->getPinCount()) {
            $data['pin_count'] = $object->getPinCount();
        }
        if (null !== $object->getPreviousNames()) {
            $values_5 = array();
            foreach ($object->getPreviousNames() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['previous_names'] = $values_5;
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if (null !== $object->getPurpose()) {
            $data['purpose'] = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        }
        if (null !== $object->getSharedTeamIds()) {
            $values_6 = array();
            foreach ($object->getSharedTeamIds() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['shared_team_ids'] = $values_6;
        }
        if (null !== $object->getShares()) {
            $values_7 = array();
            foreach ($object->getShares() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['shares'] = $values_7;
        }
        if (null !== $object->getTimezoneCount()) {
            $data['timezone_count'] = $object->getTimezoneCount();
        }
        if (null !== $object->getTopic()) {
            $data['topic'] = $this->normalizer->normalize($object->getTopic(), 'json', $context);
        }
        if (null !== $object->getUnlinked()) {
            $data['unlinked'] = $object->getUnlinked();
        }
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data['unread_count_display'] = $object->getUnreadCountDisplay();
        }
        if (null !== $object->getUseCase()) {
            $data['use_case'] = $object->getUseCase();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        return $data;
    }
}