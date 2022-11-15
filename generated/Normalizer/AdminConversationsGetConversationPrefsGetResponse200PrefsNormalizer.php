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
class AdminConversationsGetConversationPrefsGetResponse200PrefsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200Prefs';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200Prefs';
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
        $object = new \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200Prefs();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('can_thread', $data) && $data['can_thread'] !== null) {
            $object->setCanThread($this->denormalizer->denormalize($data['can_thread'], 'JoliCode\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread', 'json', $context));
        }
        elseif (\array_key_exists('can_thread', $data) && $data['can_thread'] === null) {
            $object->setCanThread(null);
        }
        if (\array_key_exists('who_can_post', $data) && $data['who_can_post'] !== null) {
            $object->setWhoCanPost($this->denormalizer->denormalize($data['who_can_post'], 'JoliCode\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost', 'json', $context));
        }
        elseif (\array_key_exists('who_can_post', $data) && $data['who_can_post'] === null) {
            $object->setWhoCanPost(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCanThread()) {
            $data['can_thread'] = $this->normalizer->normalize($object->getCanThread(), 'json', $context);
        }
        if (null !== $object->getWhoCanPost()) {
            $data['who_can_post'] = $this->normalizer->normalize($object->getWhoCanPost(), 'json', $context);
        }
        return $data;
    }
}