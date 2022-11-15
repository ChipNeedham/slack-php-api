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
class ObjsMessageAttachmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values = array();
            foreach ($data['actions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemActionsItem', 'json', $context);
            }
            $object->setActions($values);
            unset($data['actions']);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->setActions(null);
        }
        if (\array_key_exists('author_icon', $data) && $data['author_icon'] !== null) {
            $object->setAuthorIcon($data['author_icon']);
            unset($data['author_icon']);
        }
        elseif (\array_key_exists('author_icon', $data) && $data['author_icon'] === null) {
            $object->setAuthorIcon(null);
        }
        if (\array_key_exists('author_link', $data) && $data['author_link'] !== null) {
            $object->setAuthorLink($data['author_link']);
            unset($data['author_link']);
        }
        elseif (\array_key_exists('author_link', $data) && $data['author_link'] === null) {
            $object->setAuthorLink(null);
        }
        if (\array_key_exists('author_name', $data) && $data['author_name'] !== null) {
            $object->setAuthorName($data['author_name']);
            unset($data['author_name']);
        }
        elseif (\array_key_exists('author_name', $data) && $data['author_name'] === null) {
            $object->setAuthorName(null);
        }
        if (\array_key_exists('callback_id', $data) && $data['callback_id'] !== null) {
            $object->setCallbackId($data['callback_id']);
            unset($data['callback_id']);
        }
        elseif (\array_key_exists('callback_id', $data) && $data['callback_id'] === null) {
            $object->setCallbackId(null);
        }
        if (\array_key_exists('color', $data) && $data['color'] !== null) {
            $object->setColor($data['color']);
            unset($data['color']);
        }
        elseif (\array_key_exists('color', $data) && $data['color'] === null) {
            $object->setColor(null);
        }
        if (\array_key_exists('fallback', $data) && $data['fallback'] !== null) {
            $object->setFallback($data['fallback']);
            unset($data['fallback']);
        }
        elseif (\array_key_exists('fallback', $data) && $data['fallback'] === null) {
            $object->setFallback(null);
        }
        if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
            $values_1 = array();
            foreach ($data['fields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemFieldsItem', 'json', $context);
            }
            $object->setFields($values_1);
            unset($data['fields']);
        }
        elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
            $object->setFields(null);
        }
        if (\array_key_exists('footer', $data) && $data['footer'] !== null) {
            $object->setFooter($data['footer']);
            unset($data['footer']);
        }
        elseif (\array_key_exists('footer', $data) && $data['footer'] === null) {
            $object->setFooter(null);
        }
        if (\array_key_exists('footer_icon', $data) && $data['footer_icon'] !== null) {
            $object->setFooterIcon($data['footer_icon']);
            unset($data['footer_icon']);
        }
        elseif (\array_key_exists('footer_icon', $data) && $data['footer_icon'] === null) {
            $object->setFooterIcon(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('image_bytes', $data) && $data['image_bytes'] !== null) {
            $object->setImageBytes($data['image_bytes']);
            unset($data['image_bytes']);
        }
        elseif (\array_key_exists('image_bytes', $data) && $data['image_bytes'] === null) {
            $object->setImageBytes(null);
        }
        if (\array_key_exists('image_height', $data) && $data['image_height'] !== null) {
            $object->setImageHeight($data['image_height']);
            unset($data['image_height']);
        }
        elseif (\array_key_exists('image_height', $data) && $data['image_height'] === null) {
            $object->setImageHeight(null);
        }
        if (\array_key_exists('image_url', $data) && $data['image_url'] !== null) {
            $object->setImageUrl($data['image_url']);
            unset($data['image_url']);
        }
        elseif (\array_key_exists('image_url', $data) && $data['image_url'] === null) {
            $object->setImageUrl(null);
        }
        if (\array_key_exists('image_width', $data) && $data['image_width'] !== null) {
            $object->setImageWidth($data['image_width']);
            unset($data['image_width']);
        }
        elseif (\array_key_exists('image_width', $data) && $data['image_width'] === null) {
            $object->setImageWidth(null);
        }
        if (\array_key_exists('pretext', $data) && $data['pretext'] !== null) {
            $object->setPretext($data['pretext']);
            unset($data['pretext']);
        }
        elseif (\array_key_exists('pretext', $data) && $data['pretext'] === null) {
            $object->setPretext(null);
        }
        if (\array_key_exists('text', $data) && $data['text'] !== null) {
            $object->setText($data['text']);
            unset($data['text']);
        }
        elseif (\array_key_exists('text', $data) && $data['text'] === null) {
            $object->setText(null);
        }
        if (\array_key_exists('thumb_url', $data) && $data['thumb_url'] !== null) {
            $object->setThumbUrl($data['thumb_url']);
            unset($data['thumb_url']);
        }
        elseif (\array_key_exists('thumb_url', $data) && $data['thumb_url'] === null) {
            $object->setThumbUrl(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('title_link', $data) && $data['title_link'] !== null) {
            $object->setTitleLink($data['title_link']);
            unset($data['title_link']);
        }
        elseif (\array_key_exists('title_link', $data) && $data['title_link'] === null) {
            $object->setTitleLink(null);
        }
        if (\array_key_exists('ts', $data) && $data['ts'] !== null) {
            $value_2 = $data['ts'];
            if (is_float($data['ts'])) {
                $value_2 = $data['ts'];
            } elseif (is_string($data['ts'])) {
                $value_2 = $data['ts'];
            }
            $object->setTs($value_2);
            unset($data['ts']);
        }
        elseif (\array_key_exists('ts', $data) && $data['ts'] === null) {
            $object->setTs(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getActions()) {
            $values = array();
            foreach ($object->getActions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['actions'] = $values;
        }
        if (null !== $object->getAuthorIcon()) {
            $data['author_icon'] = $object->getAuthorIcon();
        }
        if (null !== $object->getAuthorLink()) {
            $data['author_link'] = $object->getAuthorLink();
        }
        if (null !== $object->getAuthorName()) {
            $data['author_name'] = $object->getAuthorName();
        }
        if (null !== $object->getCallbackId()) {
            $data['callback_id'] = $object->getCallbackId();
        }
        if (null !== $object->getColor()) {
            $data['color'] = $object->getColor();
        }
        if (null !== $object->getFallback()) {
            $data['fallback'] = $object->getFallback();
        }
        if (null !== $object->getFields()) {
            $values_1 = array();
            foreach ($object->getFields() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['fields'] = $values_1;
        }
        if (null !== $object->getFooter()) {
            $data['footer'] = $object->getFooter();
        }
        if (null !== $object->getFooterIcon()) {
            $data['footer_icon'] = $object->getFooterIcon();
        }
        $data['id'] = $object->getId();
        if (null !== $object->getImageBytes()) {
            $data['image_bytes'] = $object->getImageBytes();
        }
        if (null !== $object->getImageHeight()) {
            $data['image_height'] = $object->getImageHeight();
        }
        if (null !== $object->getImageUrl()) {
            $data['image_url'] = $object->getImageUrl();
        }
        if (null !== $object->getImageWidth()) {
            $data['image_width'] = $object->getImageWidth();
        }
        if (null !== $object->getPretext()) {
            $data['pretext'] = $object->getPretext();
        }
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        if (null !== $object->getThumbUrl()) {
            $data['thumb_url'] = $object->getThumbUrl();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getTitleLink()) {
            $data['title_link'] = $object->getTitleLink();
        }
        if (null !== $object->getTs()) {
            $value_2 = $object->getTs();
            if (is_float($object->getTs())) {
                $value_2 = $object->getTs();
            } elseif (is_string($object->getTs())) {
                $value_2 = $object->getTs();
            }
            $data['ts'] = $value_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
}