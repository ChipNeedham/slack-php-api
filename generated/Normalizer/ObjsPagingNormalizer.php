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
class ObjsPagingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsPaging';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsPaging';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsPaging();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data) && $data['count'] !== null) {
            $object->setCount($data['count']);
        }
        elseif (\array_key_exists('count', $data) && $data['count'] === null) {
            $object->setCount(null);
        }
        if (\array_key_exists('page', $data) && $data['page'] !== null) {
            $object->setPage($data['page']);
        }
        elseif (\array_key_exists('page', $data) && $data['page'] === null) {
            $object->setPage(null);
        }
        if (\array_key_exists('pages', $data) && $data['pages'] !== null) {
            $object->setPages($data['pages']);
        }
        elseif (\array_key_exists('pages', $data) && $data['pages'] === null) {
            $object->setPages(null);
        }
        if (\array_key_exists('per_page', $data) && $data['per_page'] !== null) {
            $object->setPerPage($data['per_page']);
        }
        elseif (\array_key_exists('per_page', $data) && $data['per_page'] === null) {
            $object->setPerPage(null);
        }
        if (\array_key_exists('spill', $data) && $data['spill'] !== null) {
            $object->setSpill($data['spill']);
        }
        elseif (\array_key_exists('spill', $data) && $data['spill'] === null) {
            $object->setSpill(null);
        }
        if (\array_key_exists('total', $data) && $data['total'] !== null) {
            $object->setTotal($data['total']);
        }
        elseif (\array_key_exists('total', $data) && $data['total'] === null) {
            $object->setTotal(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        $data['page'] = $object->getPage();
        if (null !== $object->getPages()) {
            $data['pages'] = $object->getPages();
        }
        if (null !== $object->getPerPage()) {
            $data['per_page'] = $object->getPerPage();
        }
        if (null !== $object->getSpill()) {
            $data['spill'] = $object->getSpill();
        }
        $data['total'] = $object->getTotal();
        return $data;
    }
}