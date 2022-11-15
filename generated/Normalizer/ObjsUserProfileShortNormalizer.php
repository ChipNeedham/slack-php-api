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
class ObjsUserProfileShortNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsUserProfileShort();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('avatar_hash', $data) && $data['avatar_hash'] !== null) {
            $object->setAvatarHash($data['avatar_hash']);
        }
        elseif (\array_key_exists('avatar_hash', $data) && $data['avatar_hash'] === null) {
            $object->setAvatarHash(null);
        }
        if (\array_key_exists('display_name', $data) && $data['display_name'] !== null) {
            $object->setDisplayName($data['display_name']);
        }
        elseif (\array_key_exists('display_name', $data) && $data['display_name'] === null) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('display_name_normalized', $data) && $data['display_name_normalized'] !== null) {
            $object->setDisplayNameNormalized($data['display_name_normalized']);
        }
        elseif (\array_key_exists('display_name_normalized', $data) && $data['display_name_normalized'] === null) {
            $object->setDisplayNameNormalized(null);
        }
        if (\array_key_exists('first_name', $data) && $data['first_name'] !== null) {
            $value = $data['first_name'];
            if (is_string($data['first_name'])) {
                $value = $data['first_name'];
            }
            $object->setFirstName($value);
        }
        elseif (\array_key_exists('first_name', $data) && $data['first_name'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('image_72', $data) && $data['image_72'] !== null) {
            $object->setImage72($data['image_72']);
        }
        elseif (\array_key_exists('image_72', $data) && $data['image_72'] === null) {
            $object->setImage72(null);
        }
        if (\array_key_exists('is_restricted', $data) && $data['is_restricted'] !== null) {
            $object->setIsRestricted($data['is_restricted']);
        }
        elseif (\array_key_exists('is_restricted', $data) && $data['is_restricted'] === null) {
            $object->setIsRestricted(null);
        }
        if (\array_key_exists('is_ultra_restricted', $data) && $data['is_ultra_restricted'] !== null) {
            $object->setIsUltraRestricted($data['is_ultra_restricted']);
        }
        elseif (\array_key_exists('is_ultra_restricted', $data) && $data['is_ultra_restricted'] === null) {
            $object->setIsUltraRestricted(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('real_name', $data) && $data['real_name'] !== null) {
            $object->setRealName($data['real_name']);
        }
        elseif (\array_key_exists('real_name', $data) && $data['real_name'] === null) {
            $object->setRealName(null);
        }
        if (\array_key_exists('real_name_normalized', $data) && $data['real_name_normalized'] !== null) {
            $object->setRealNameNormalized($data['real_name_normalized']);
        }
        elseif (\array_key_exists('real_name_normalized', $data) && $data['real_name_normalized'] === null) {
            $object->setRealNameNormalized(null);
        }
        if (\array_key_exists('team', $data) && $data['team'] !== null) {
            $object->setTeam($data['team']);
        }
        elseif (\array_key_exists('team', $data) && $data['team'] === null) {
            $object->setTeam(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['avatar_hash'] = $object->getAvatarHash();
        $data['display_name'] = $object->getDisplayName();
        if (null !== $object->getDisplayNameNormalized()) {
            $data['display_name_normalized'] = $object->getDisplayNameNormalized();
        }
        $value = $object->getFirstName();
        if (is_string($object->getFirstName())) {
            $value = $object->getFirstName();
        }
        $data['first_name'] = $value;
        $data['image_72'] = $object->getImage72();
        $data['is_restricted'] = $object->getIsRestricted();
        $data['is_ultra_restricted'] = $object->getIsUltraRestricted();
        $data['name'] = $object->getName();
        $data['real_name'] = $object->getRealName();
        if (null !== $object->getRealNameNormalized()) {
            $data['real_name_normalized'] = $object->getRealNameNormalized();
        }
        $data['team'] = $object->getTeam();
        return $data;
    }
}