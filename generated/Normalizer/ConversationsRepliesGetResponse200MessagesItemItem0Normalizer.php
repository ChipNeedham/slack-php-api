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
class ConversationsRepliesGetResponse200MessagesItemItem0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem0';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem0';
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
        $object = new \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('reply_count', $data) && $data['reply_count'] !== null) {
            $object->setReplyCount($data['reply_count']);
        }
        elseif (\array_key_exists('reply_count', $data) && $data['reply_count'] === null) {
            $object->setReplyCount(null);
        }
        if (\array_key_exists('reply_users', $data) && $data['reply_users'] !== null) {
            $values = array();
            foreach ($data['reply_users'] as $value) {
                $values[] = $value;
            }
            $object->setReplyUsers($values);
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
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatestReply()) {
            $data['latest_reply'] = $object->getLatestReply();
        }
        $data['reply_count'] = $object->getReplyCount();
        if (null !== $object->getReplyUsers()) {
            $values = array();
            foreach ($object->getReplyUsers() as $value) {
                $values[] = $value;
            }
            $data['reply_users'] = $values;
        }
        if (null !== $object->getReplyUsersCount()) {
            $data['reply_users_count'] = $object->getReplyUsersCount();
        }
        if (null !== $object->getSourceTeam()) {
            $data['source_team'] = $object->getSourceTeam();
        }
        $data['subscribed'] = $object->getSubscribed();
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        }
        $data['text'] = $object->getText();
        $data['thread_ts'] = $object->getThreadTs();
        $data['ts'] = $object->getTs();
        $data['type'] = $object->getType();
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        }
        $data['user'] = $object->getUser();
        if (null !== $object->getUserProfile()) {
            $data['user_profile'] = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        }
        if (null !== $object->getUserTeam()) {
            $data['user_team'] = $object->getUserTeam();
        }
        return $data;
    }
}