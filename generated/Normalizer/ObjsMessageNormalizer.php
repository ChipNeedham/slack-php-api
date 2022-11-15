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
class ObjsMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsMessage';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsMessage';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attachments', $data) && $data['attachments'] !== null) {
            $values = array();
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem', 'json', $context);
            }
            $object->setAttachments($values);
        }
        elseif (\array_key_exists('attachments', $data) && $data['attachments'] === null) {
            $object->setAttachments(null);
        }
        if (\array_key_exists('blocks', $data) && $data['blocks'] !== null) {
            $values_1 = array();
            foreach ($data['blocks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\BlocksItem', 'json', $context);
            }
            $object->setBlocks($values_1);
        }
        elseif (\array_key_exists('blocks', $data) && $data['blocks'] === null) {
            $object->setBlocks(null);
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
        if (\array_key_exists('client_msg_id', $data) && $data['client_msg_id'] !== null) {
            $object->setClientMsgId($data['client_msg_id']);
        }
        elseif (\array_key_exists('client_msg_id', $data) && $data['client_msg_id'] === null) {
            $object->setClientMsgId(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'JoliCode\\Slack\\Api\\Model\\ObjsComment', 'json', $context));
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('display_as_bot', $data) && $data['display_as_bot'] !== null) {
            $object->setDisplayAsBot($data['display_as_bot']);
        }
        elseif (\array_key_exists('display_as_bot', $data) && $data['display_as_bot'] === null) {
            $object->setDisplayAsBot(null);
        }
        if (\array_key_exists('file', $data) && $data['file'] !== null) {
            $object->setFile($this->denormalizer->denormalize($data['file'], 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        }
        elseif (\array_key_exists('file', $data) && $data['file'] === null) {
            $object->setFile(null);
        }
        if (\array_key_exists('files', $data) && $data['files'] !== null) {
            $values_2 = array();
            foreach ($data['files'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context);
            }
            $object->setFiles($values_2);
        }
        elseif (\array_key_exists('files', $data) && $data['files'] === null) {
            $object->setFiles(null);
        }
        if (\array_key_exists('icons', $data) && $data['icons'] !== null) {
            $object->setIcons($this->denormalizer->denormalize($data['icons'], 'JoliCode\\Slack\\Api\\Model\\ObjsMessageIcons', 'json', $context));
        }
        elseif (\array_key_exists('icons', $data) && $data['icons'] === null) {
            $object->setIcons(null);
        }
        if (\array_key_exists('inviter', $data) && $data['inviter'] !== null) {
            $object->setInviter($data['inviter']);
        }
        elseif (\array_key_exists('inviter', $data) && $data['inviter'] === null) {
            $object->setInviter(null);
        }
        if (\array_key_exists('is_delayed_message', $data) && $data['is_delayed_message'] !== null) {
            $object->setIsDelayedMessage($data['is_delayed_message']);
        }
        elseif (\array_key_exists('is_delayed_message', $data) && $data['is_delayed_message'] === null) {
            $object->setIsDelayedMessage(null);
        }
        if (\array_key_exists('is_intro', $data) && $data['is_intro'] !== null) {
            $object->setIsIntro($data['is_intro']);
        }
        elseif (\array_key_exists('is_intro', $data) && $data['is_intro'] === null) {
            $object->setIsIntro(null);
        }
        if (\array_key_exists('is_starred', $data) && $data['is_starred'] !== null) {
            $object->setIsStarred($data['is_starred']);
        }
        elseif (\array_key_exists('is_starred', $data) && $data['is_starred'] === null) {
            $object->setIsStarred(null);
        }
        if (\array_key_exists('last_read', $data) && $data['last_read'] !== null) {
            $object->setLastRead($data['last_read']);
        }
        elseif (\array_key_exists('last_read', $data) && $data['last_read'] === null) {
            $object->setLastRead(null);
        }
        if (\array_key_exists('latest_reply', $data) && $data['latest_reply'] !== null) {
            $object->setLatestReply($data['latest_reply']);
        }
        elseif (\array_key_exists('latest_reply', $data) && $data['latest_reply'] === null) {
            $object->setLatestReply(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('old_name', $data) && $data['old_name'] !== null) {
            $object->setOldName($data['old_name']);
        }
        elseif (\array_key_exists('old_name', $data) && $data['old_name'] === null) {
            $object->setOldName(null);
        }
        if (\array_key_exists('parent_user_id', $data) && $data['parent_user_id'] !== null) {
            $object->setParentUserId($data['parent_user_id']);
        }
        elseif (\array_key_exists('parent_user_id', $data) && $data['parent_user_id'] === null) {
            $object->setParentUserId(null);
        }
        if (\array_key_exists('permalink', $data) && $data['permalink'] !== null) {
            $object->setPermalink($data['permalink']);
        }
        elseif (\array_key_exists('permalink', $data) && $data['permalink'] === null) {
            $object->setPermalink(null);
        }
        if (\array_key_exists('pinned_to', $data) && $data['pinned_to'] !== null) {
            $values_3 = array();
            foreach ($data['pinned_to'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPinnedTo($values_3);
        }
        elseif (\array_key_exists('pinned_to', $data) && $data['pinned_to'] === null) {
            $object->setPinnedTo(null);
        }
        if (\array_key_exists('purpose', $data) && $data['purpose'] !== null) {
            $object->setPurpose($data['purpose']);
        }
        elseif (\array_key_exists('purpose', $data) && $data['purpose'] === null) {
            $object->setPurpose(null);
        }
        if (\array_key_exists('reactions', $data) && $data['reactions'] !== null) {
            $values_4 = array();
            foreach ($data['reactions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'JoliCode\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
            }
            $object->setReactions($values_4);
        }
        elseif (\array_key_exists('reactions', $data) && $data['reactions'] === null) {
            $object->setReactions(null);
        }
        if (\array_key_exists('reply_count', $data) && $data['reply_count'] !== null) {
            $object->setReplyCount($data['reply_count']);
        }
        elseif (\array_key_exists('reply_count', $data) && $data['reply_count'] === null) {
            $object->setReplyCount(null);
        }
        if (\array_key_exists('reply_users', $data) && $data['reply_users'] !== null) {
            $values_5 = array();
            foreach ($data['reply_users'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setReplyUsers($values_5);
        }
        elseif (\array_key_exists('reply_users', $data) && $data['reply_users'] === null) {
            $object->setReplyUsers(null);
        }
        if (\array_key_exists('reply_users_count', $data) && $data['reply_users_count'] !== null) {
            $object->setReplyUsersCount($data['reply_users_count']);
        }
        elseif (\array_key_exists('reply_users_count', $data) && $data['reply_users_count'] === null) {
            $object->setReplyUsersCount(null);
        }
        if (\array_key_exists('source_team', $data) && $data['source_team'] !== null) {
            $object->setSourceTeam($data['source_team']);
        }
        elseif (\array_key_exists('source_team', $data) && $data['source_team'] === null) {
            $object->setSourceTeam(null);
        }
        if (\array_key_exists('subscribed', $data) && $data['subscribed'] !== null) {
            $object->setSubscribed($data['subscribed']);
        }
        elseif (\array_key_exists('subscribed', $data) && $data['subscribed'] === null) {
            $object->setSubscribed(null);
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
        if (\array_key_exists('thread_ts', $data) && $data['thread_ts'] !== null) {
            $object->setThreadTs($data['thread_ts']);
        }
        elseif (\array_key_exists('thread_ts', $data) && $data['thread_ts'] === null) {
            $object->setThreadTs(null);
        }
        if (\array_key_exists('topic', $data) && $data['topic'] !== null) {
            $object->setTopic($data['topic']);
        }
        elseif (\array_key_exists('topic', $data) && $data['topic'] === null) {
            $object->setTopic(null);
        }
        if (\array_key_exists('ts', $data) && $data['ts'] !== null) {
            $object->setTs($data['ts']);
        }
        elseif (\array_key_exists('ts', $data) && $data['ts'] === null) {
            $object->setTs(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('unread_count', $data) && $data['unread_count'] !== null) {
            $object->setUnreadCount($data['unread_count']);
        }
        elseif (\array_key_exists('unread_count', $data) && $data['unread_count'] === null) {
            $object->setUnreadCount(null);
        }
        if (\array_key_exists('upload', $data) && $data['upload'] !== null) {
            $object->setUpload($data['upload']);
        }
        elseif (\array_key_exists('upload', $data) && $data['upload'] === null) {
            $object->setUpload(null);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('user_profile', $data) && $data['user_profile'] !== null) {
            $object->setUserProfile($this->denormalizer->denormalize($data['user_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
        }
        elseif (\array_key_exists('user_profile', $data) && $data['user_profile'] === null) {
            $object->setUserProfile(null);
        }
        if (\array_key_exists('user_team', $data) && $data['user_team'] !== null) {
            $object->setUserTeam($data['user_team']);
        }
        elseif (\array_key_exists('user_team', $data) && $data['user_team'] === null) {
            $object->setUserTeam(null);
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
        if (null !== $object->getBlocks()) {
            $values_1 = array();
            foreach ($object->getBlocks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['blocks'] = $values_1;
        }
        if (null !== $object->getBotId()) {
            $data['bot_id'] = $object->getBotId();
        }
        if (null !== $object->getBotProfile()) {
            $data['bot_profile'] = $this->normalizer->normalize($object->getBotProfile(), 'json', $context);
        }
        if (null !== $object->getClientMsgId()) {
            $data['client_msg_id'] = $object->getClientMsgId();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        }
        if (null !== $object->getDisplayAsBot()) {
            $data['display_as_bot'] = $object->getDisplayAsBot();
        }
        if (null !== $object->getFile()) {
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getFiles()) {
            $values_2 = array();
            foreach ($object->getFiles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['files'] = $values_2;
        }
        if (null !== $object->getIcons()) {
            $data['icons'] = $this->normalizer->normalize($object->getIcons(), 'json', $context);
        }
        if (null !== $object->getInviter()) {
            $data['inviter'] = $object->getInviter();
        }
        if (null !== $object->getIsDelayedMessage()) {
            $data['is_delayed_message'] = $object->getIsDelayedMessage();
        }
        if (null !== $object->getIsIntro()) {
            $data['is_intro'] = $object->getIsIntro();
        }
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatestReply()) {
            $data['latest_reply'] = $object->getLatestReply();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getOldName()) {
            $data['old_name'] = $object->getOldName();
        }
        if (null !== $object->getParentUserId()) {
            $data['parent_user_id'] = $object->getParentUserId();
        }
        if (null !== $object->getPermalink()) {
            $data['permalink'] = $object->getPermalink();
        }
        if (null !== $object->getPinnedTo()) {
            $values_3 = array();
            foreach ($object->getPinnedTo() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['pinned_to'] = $values_3;
        }
        if (null !== $object->getPurpose()) {
            $data['purpose'] = $object->getPurpose();
        }
        if (null !== $object->getReactions()) {
            $values_4 = array();
            foreach ($object->getReactions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['reactions'] = $values_4;
        }
        if (null !== $object->getReplyCount()) {
            $data['reply_count'] = $object->getReplyCount();
        }
        if (null !== $object->getReplyUsers()) {
            $values_5 = array();
            foreach ($object->getReplyUsers() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['reply_users'] = $values_5;
        }
        if (null !== $object->getReplyUsersCount()) {
            $data['reply_users_count'] = $object->getReplyUsersCount();
        }
        if (null !== $object->getSourceTeam()) {
            $data['source_team'] = $object->getSourceTeam();
        }
        if (null !== $object->getSubscribed()) {
            $data['subscribed'] = $object->getSubscribed();
        }
        if (null !== $object->getSubtype()) {
            $data['subtype'] = $object->getSubtype();
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        }
        $data['text'] = $object->getText();
        if (null !== $object->getThreadTs()) {
            $data['thread_ts'] = $object->getThreadTs();
        }
        if (null !== $object->getTopic()) {
            $data['topic'] = $object->getTopic();
        }
        $data['ts'] = $object->getTs();
        $data['type'] = $object->getType();
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        }
        if (null !== $object->getUpload()) {
            $data['upload'] = $object->getUpload();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getUserProfile()) {
            $data['user_profile'] = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        }
        if (null !== $object->getUserTeam()) {
            $data['user_team'] = $object->getUserTeam();
        }
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        return $data;
    }
}