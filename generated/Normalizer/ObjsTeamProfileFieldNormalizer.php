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
class ObjsTeamProfileFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsTeamProfileField();
        if (\array_key_exists('ordering', $data) && \is_int($data['ordering'])) {
            $data['ordering'] = (double) $data['ordering'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('field_name', $data) && $data['field_name'] !== null) {
            $value = $data['field_name'];
            if (is_string($data['field_name'])) {
                $value = $data['field_name'];
            }
            $object->setFieldName($value);
        }
        elseif (\array_key_exists('field_name', $data) && $data['field_name'] === null) {
            $object->setFieldName(null);
        }
        if (\array_key_exists('hint', $data) && $data['hint'] !== null) {
            $object->setHint($data['hint']);
        }
        elseif (\array_key_exists('hint', $data) && $data['hint'] === null) {
            $object->setHint(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_hidden', $data) && $data['is_hidden'] !== null) {
            $object->setIsHidden($data['is_hidden']);
        }
        elseif (\array_key_exists('is_hidden', $data) && $data['is_hidden'] === null) {
            $object->setIsHidden(null);
        }
        if (\array_key_exists('label', $data) && $data['label'] !== null) {
            $object->setLabel($data['label']);
        }
        elseif (\array_key_exists('label', $data) && $data['label'] === null) {
            $object->setLabel(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileFieldOption', 'json', $context));
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('ordering', $data) && $data['ordering'] !== null) {
            $object->setOrdering($data['ordering']);
        }
        elseif (\array_key_exists('ordering', $data) && $data['ordering'] === null) {
            $object->setOrdering(null);
        }
        if (\array_key_exists('possible_values', $data) && $data['possible_values'] !== null) {
            $value_1 = $data['possible_values'];
            if (is_array($data['possible_values']) && $this->isOnlyNumericKeys($data['possible_values'])) {
                $values = array();
                foreach ($data['possible_values'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            }
            $object->setPossibleValues($value_1);
        }
        elseif (\array_key_exists('possible_values', $data) && $data['possible_values'] === null) {
            $object->setPossibleValues(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFieldName()) {
            $value = $object->getFieldName();
            if (is_string($object->getFieldName())) {
                $value = $object->getFieldName();
            }
            $data['field_name'] = $value;
        }
        $data['hint'] = $object->getHint();
        $data['id'] = $object->getId();
        if (null !== $object->getIsHidden()) {
            $data['is_hidden'] = $object->getIsHidden();
        }
        $data['label'] = $object->getLabel();
        if (null !== $object->getOptions()) {
            $data['options'] = $this->normalizer->normalize($object->getOptions(), 'json', $context);
        }
        $data['ordering'] = $object->getOrdering();
        if (null !== $object->getPossibleValues()) {
            $value_1 = $object->getPossibleValues();
            if (is_array($object->getPossibleValues())) {
                $values = array();
                foreach ($object->getPossibleValues() as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            }
            $data['possible_values'] = $value_1;
        }
        $data['type'] = $object->getType();
        return $data;
    }
}