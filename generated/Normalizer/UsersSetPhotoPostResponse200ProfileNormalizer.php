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
class UsersSetPhotoPostResponse200ProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponse200Profile';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponse200Profile';
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
        $object = new \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200Profile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('avatar_hash', $data) && $data['avatar_hash'] !== null) {
            $object->setAvatarHash($data['avatar_hash']);
        }
        elseif (\array_key_exists('avatar_hash', $data) && $data['avatar_hash'] === null) {
            $object->setAvatarHash(null);
        }
        if (\array_key_exists('image_1024', $data) && $data['image_1024'] !== null) {
            $object->setImage1024($data['image_1024']);
        }
        elseif (\array_key_exists('image_1024', $data) && $data['image_1024'] === null) {
            $object->setImage1024(null);
        }
        if (\array_key_exists('image_192', $data) && $data['image_192'] !== null) {
            $object->setImage192($data['image_192']);
        }
        elseif (\array_key_exists('image_192', $data) && $data['image_192'] === null) {
            $object->setImage192(null);
        }
        if (\array_key_exists('image_24', $data) && $data['image_24'] !== null) {
            $object->setImage24($data['image_24']);
        }
        elseif (\array_key_exists('image_24', $data) && $data['image_24'] === null) {
            $object->setImage24(null);
        }
        if (\array_key_exists('image_32', $data) && $data['image_32'] !== null) {
            $object->setImage32($data['image_32']);
        }
        elseif (\array_key_exists('image_32', $data) && $data['image_32'] === null) {
            $object->setImage32(null);
        }
        if (\array_key_exists('image_48', $data) && $data['image_48'] !== null) {
            $object->setImage48($data['image_48']);
        }
        elseif (\array_key_exists('image_48', $data) && $data['image_48'] === null) {
            $object->setImage48(null);
        }
        if (\array_key_exists('image_512', $data) && $data['image_512'] !== null) {
            $object->setImage512($data['image_512']);
        }
        elseif (\array_key_exists('image_512', $data) && $data['image_512'] === null) {
            $object->setImage512(null);
        }
        if (\array_key_exists('image_72', $data) && $data['image_72'] !== null) {
            $object->setImage72($data['image_72']);
        }
        elseif (\array_key_exists('image_72', $data) && $data['image_72'] === null) {
            $object->setImage72(null);
        }
        if (\array_key_exists('image_original', $data) && $data['image_original'] !== null) {
            $object->setImageOriginal($data['image_original']);
        }
        elseif (\array_key_exists('image_original', $data) && $data['image_original'] === null) {
            $object->setImageOriginal(null);
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
        $data['image_1024'] = $object->getImage1024();
        $data['image_192'] = $object->getImage192();
        $data['image_24'] = $object->getImage24();
        $data['image_32'] = $object->getImage32();
        $data['image_48'] = $object->getImage48();
        $data['image_512'] = $object->getImage512();
        $data['image_72'] = $object->getImage72();
        $data['image_original'] = $object->getImageOriginal();
        return $data;
    }
}