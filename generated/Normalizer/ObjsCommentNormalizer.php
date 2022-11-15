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
class ObjsCommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsComment';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsComment';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsComment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
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
        if (\array_key_exists('num_stars', $data) && $data['num_stars'] !== null) {
            $object->setNumStars($data['num_stars']);
        }
        elseif (\array_key_exists('num_stars', $data) && $data['num_stars'] === null) {
            $object->setNumStars(null);
        }
        if (\array_key_exists('pinned_info', $data) && $data['pinned_info'] !== null) {
            $object->setPinnedInfo($data['pinned_info']);
        }
        elseif (\array_key_exists('pinned_info', $data) && $data['pinned_info'] === null) {
            $object->setPinnedInfo(null);
        }
        if (\array_key_exists('pinned_to', $data) && $data['pinned_to'] !== null) {
            $values = array();
            foreach ($data['pinned_to'] as $value) {
                $values[] = $value;
            }
            $object->setPinnedTo($values);
        }
        elseif (\array_key_exists('pinned_to', $data) && $data['pinned_to'] === null) {
            $object->setPinnedTo(null);
        }
        if (\array_key_exists('reactions', $data) && $data['reactions'] !== null) {
            $values_1 = array();
            foreach ($data['reactions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
            }
            $object->setReactions($values_1);
        }
        elseif (\array_key_exists('reactions', $data) && $data['reactions'] === null) {
            $object->setReactions(null);
        }
        if (\array_key_exists('timestamp', $data) && $data['timestamp'] !== null) {
            $value_2 = $data['timestamp'];
            if (is_int($data['timestamp'])) {
                $value_2 = $data['timestamp'];
            } elseif (is_string($data['timestamp'])) {
                $value_2 = $data['timestamp'];
            }
            $object->setTimestamp($value_2);
        }
        elseif (\array_key_exists('timestamp', $data) && $data['timestamp'] === null) {
            $object->setTimestamp(null);
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
        $data['comment'] = $object->getComment();
        $data['created'] = $object->getCreated();
        $data['id'] = $object->getId();
        $data['is_intro'] = $object->getIsIntro();
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        }
        if (null !== $object->getNumStars()) {
            $data['num_stars'] = $object->getNumStars();
        }
        if (null !== $object->getPinnedInfo()) {
            $data['pinned_info'] = $object->getPinnedInfo();
        }
        if (null !== $object->getPinnedTo()) {
            $values = array();
            foreach ($object->getPinnedTo() as $value) {
                $values[] = $value;
            }
            $data['pinned_to'] = $values;
        }
        if (null !== $object->getReactions()) {
            $values_1 = array();
            foreach ($object->getReactions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['reactions'] = $values_1;
        }
        $value_2 = $object->getTimestamp();
        if (is_int($object->getTimestamp())) {
            $value_2 = $object->getTimestamp();
        } elseif (is_string($object->getTimestamp())) {
            $value_2 = $object->getTimestamp();
        }
        $data['timestamp'] = $value_2;
        $data['user'] = $object->getUser();
        return $data;
    }
}