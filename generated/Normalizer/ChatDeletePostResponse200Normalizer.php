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
class ChatDeletePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ChatDeletePostResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ChatDeletePostResponse200';
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
        $object = new \JoliCode\Slack\Api\Model\ChatDeletePostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channel', $data) && $data['channel'] !== null) {
            $object->setChannel($data['channel']);
        }
        elseif (\array_key_exists('channel', $data) && $data['channel'] === null) {
            $object->setChannel(null);
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
        }
        if (\array_key_exists('ts', $data) && $data['ts'] !== null) {
            $object->setTs($data['ts']);
        }
        elseif (\array_key_exists('ts', $data) && $data['ts'] === null) {
            $object->setTs(null);
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
        $data['ok'] = $object->getOk();
        $data['ts'] = $object->getTs();
        return $data;
    }
}