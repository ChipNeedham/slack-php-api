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
class FilesInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\FilesInfoGetResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\FilesInfoGetResponse200';
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
        $object = new \JoliCode\Slack\Api\Model\FilesInfoGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
            $values = array();
            foreach ($data['comments'] as $value) {
                $values[] = $value;
            }
            $object->setComments($values);
        }
        elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
            $object->setComments(null);
        }
        if (\array_key_exists('content_html', $data) && $data['content_html'] !== null) {
            $object->setContentHtml($data['content_html']);
        }
        elseif (\array_key_exists('content_html', $data) && $data['content_html'] === null) {
            $object->setContentHtml(null);
        }
        if (\array_key_exists('editor', $data) && $data['editor'] !== null) {
            $object->setEditor($data['editor']);
        }
        elseif (\array_key_exists('editor', $data) && $data['editor'] === null) {
            $object->setEditor(null);
        }
        if (\array_key_exists('file', $data) && $data['file'] !== null) {
            $object->setFile($this->denormalizer->denormalize($data['file'], 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        }
        elseif (\array_key_exists('file', $data) && $data['file'] === null) {
            $object->setFile(null);
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
        }
        if (\array_key_exists('paging', $data) && $data['paging'] !== null) {
            $object->setPaging($this->denormalizer->denormalize($data['paging'], 'JoliCode\\Slack\\Api\\Model\\ObjsPaging', 'json', $context));
        }
        elseif (\array_key_exists('paging', $data) && $data['paging'] === null) {
            $object->setPaging(null);
        }
        if (\array_key_exists('response_metadata', $data) && $data['response_metadata'] !== null) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'JoliCode\\Slack\\Api\\Model\\ObjsResponseMetadata', 'json', $context));
        }
        elseif (\array_key_exists('response_metadata', $data) && $data['response_metadata'] === null) {
            $object->setResponseMetadata(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getComments() as $value) {
            $values[] = $value;
        }
        $data['comments'] = $values;
        if (null !== $object->getContentHtml()) {
            $data['content_html'] = $object->getContentHtml();
        }
        if (null !== $object->getEditor()) {
            $data['editor'] = $object->getEditor();
        }
        $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        $data['ok'] = $object->getOk();
        if (null !== $object->getPaging()) {
            $data['paging'] = $this->normalizer->normalize($object->getPaging(), 'json', $context);
        }
        if (null !== $object->getResponseMetadata()) {
            $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        }
        return $data;
    }
}