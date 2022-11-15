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
class ObjsExternalOrgMigrationsCurrentItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsExternalOrgMigrationsCurrentItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsExternalOrgMigrationsCurrentItem';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrationsCurrentItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date_started', $data) && $data['date_started'] !== null) {
            $object->setDateStarted($data['date_started']);
        }
        elseif (\array_key_exists('date_started', $data) && $data['date_started'] === null) {
            $object->setDateStarted(null);
        }
        if (\array_key_exists('team_id', $data) && $data['team_id'] !== null) {
            $object->setTeamId($data['team_id']);
        }
        elseif (\array_key_exists('team_id', $data) && $data['team_id'] === null) {
            $object->setTeamId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['date_started'] = $object->getDateStarted();
        $data['team_id'] = $object->getTeamId();
        return $data;
    }
}