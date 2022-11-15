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
class ConversationsClosePostResponsedefaultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ConversationsClosePostResponsedefault';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ConversationsClosePostResponsedefault';
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
        $object = new \JoliCode\Slack\Api\Model\ConversationsClosePostResponsedefault();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('callstack', $data) && $data['callstack'] !== null) {
            $object->setCallstack($data['callstack']);
        }
        elseif (\array_key_exists('callstack', $data) && $data['callstack'] === null) {
            $object->setCallstack(null);
        }
        if (\array_key_exists('error', $data) && $data['error'] !== null) {
            $object->setError($data['error']);
        }
        elseif (\array_key_exists('error', $data) && $data['error'] === null) {
            $object->setError(null);
        }
        if (\array_key_exists('needed', $data) && $data['needed'] !== null) {
            $object->setNeeded($data['needed']);
        }
        elseif (\array_key_exists('needed', $data) && $data['needed'] === null) {
            $object->setNeeded(null);
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
        }
        if (\array_key_exists('provided', $data) && $data['provided'] !== null) {
            $object->setProvided($data['provided']);
        }
        elseif (\array_key_exists('provided', $data) && $data['provided'] === null) {
            $object->setProvided(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCallstack()) {
            $data['callstack'] = $object->getCallstack();
        }
        $data['error'] = $object->getError();
        if (null !== $object->getNeeded()) {
            $data['needed'] = $object->getNeeded();
        }
        $data['ok'] = $object->getOk();
        if (null !== $object->getProvided()) {
            $data['provided'] = $object->getProvided();
        }
        return $data;
    }
}