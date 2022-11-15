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
class ObjsEnterpriseUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsEnterpriseUser();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enterprise_id', $data) && $data['enterprise_id'] !== null) {
            $object->setEnterpriseId($data['enterprise_id']);
        }
        elseif (\array_key_exists('enterprise_id', $data) && $data['enterprise_id'] === null) {
            $object->setEnterpriseId(null);
        }
        if (\array_key_exists('enterprise_name', $data) && $data['enterprise_name'] !== null) {
            $object->setEnterpriseName($data['enterprise_name']);
        }
        elseif (\array_key_exists('enterprise_name', $data) && $data['enterprise_name'] === null) {
            $object->setEnterpriseName(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_admin', $data) && $data['is_admin'] !== null) {
            $object->setIsAdmin($data['is_admin']);
        }
        elseif (\array_key_exists('is_admin', $data) && $data['is_admin'] === null) {
            $object->setIsAdmin(null);
        }
        if (\array_key_exists('is_owner', $data) && $data['is_owner'] !== null) {
            $object->setIsOwner($data['is_owner']);
        }
        elseif (\array_key_exists('is_owner', $data) && $data['is_owner'] === null) {
            $object->setIsOwner(null);
        }
        if (\array_key_exists('teams', $data) && $data['teams'] !== null) {
            $values = array();
            foreach ($data['teams'] as $value) {
                $values[] = $value;
            }
            $object->setTeams($values);
        }
        elseif (\array_key_exists('teams', $data) && $data['teams'] === null) {
            $object->setTeams(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['enterprise_id'] = $object->getEnterpriseId();
        $data['enterprise_name'] = $object->getEnterpriseName();
        $data['id'] = $object->getId();
        $data['is_admin'] = $object->getIsAdmin();
        $data['is_owner'] = $object->getIsOwner();
        $values = array();
        foreach ($object->getTeams() as $value) {
            $values[] = $value;
        }
        $data['teams'] = $values;
        return $data;
    }
}