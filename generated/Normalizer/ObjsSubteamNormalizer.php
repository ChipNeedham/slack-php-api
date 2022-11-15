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
class ObjsSubteamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsSubteam';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsSubteam';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsSubteam();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('auto_provision', $data) && $data['auto_provision'] !== null) {
            $object->setAutoProvision($data['auto_provision']);
        }
        elseif (\array_key_exists('auto_provision', $data) && $data['auto_provision'] === null) {
            $object->setAutoProvision(null);
        }
        if (\array_key_exists('auto_type', $data) && $data['auto_type'] !== null) {
            $object->setAutoType($data['auto_type']);
        }
        elseif (\array_key_exists('auto_type', $data) && $data['auto_type'] === null) {
            $object->setAutoType(null);
        }
        if (\array_key_exists('channel_count', $data) && $data['channel_count'] !== null) {
            $object->setChannelCount($data['channel_count']);
        }
        elseif (\array_key_exists('channel_count', $data) && $data['channel_count'] === null) {
            $object->setChannelCount(null);
        }
        if (\array_key_exists('created_by', $data) && $data['created_by'] !== null) {
            $object->setCreatedBy($data['created_by']);
        }
        elseif (\array_key_exists('created_by', $data) && $data['created_by'] === null) {
            $object->setCreatedBy(null);
        }
        if (\array_key_exists('date_create', $data) && $data['date_create'] !== null) {
            $object->setDateCreate($data['date_create']);
        }
        elseif (\array_key_exists('date_create', $data) && $data['date_create'] === null) {
            $object->setDateCreate(null);
        }
        if (\array_key_exists('date_delete', $data) && $data['date_delete'] !== null) {
            $object->setDateDelete($data['date_delete']);
        }
        elseif (\array_key_exists('date_delete', $data) && $data['date_delete'] === null) {
            $object->setDateDelete(null);
        }
        if (\array_key_exists('date_update', $data) && $data['date_update'] !== null) {
            $object->setDateUpdate($data['date_update']);
        }
        elseif (\array_key_exists('date_update', $data) && $data['date_update'] === null) {
            $object->setDateUpdate(null);
        }
        if (\array_key_exists('deleted_by', $data) && $data['deleted_by'] !== null) {
            $object->setDeletedBy($data['deleted_by']);
        }
        elseif (\array_key_exists('deleted_by', $data) && $data['deleted_by'] === null) {
            $object->setDeletedBy(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('enterprise_subteam_id', $data) && $data['enterprise_subteam_id'] !== null) {
            $object->setEnterpriseSubteamId($data['enterprise_subteam_id']);
        }
        elseif (\array_key_exists('enterprise_subteam_id', $data) && $data['enterprise_subteam_id'] === null) {
            $object->setEnterpriseSubteamId(null);
        }
        if (\array_key_exists('handle', $data) && $data['handle'] !== null) {
            $object->setHandle($data['handle']);
        }
        elseif (\array_key_exists('handle', $data) && $data['handle'] === null) {
            $object->setHandle(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_external', $data) && $data['is_external'] !== null) {
            $object->setIsExternal($data['is_external']);
        }
        elseif (\array_key_exists('is_external', $data) && $data['is_external'] === null) {
            $object->setIsExternal(null);
        }
        if (\array_key_exists('is_subteam', $data) && $data['is_subteam'] !== null) {
            $object->setIsSubteam($data['is_subteam']);
        }
        elseif (\array_key_exists('is_subteam', $data) && $data['is_subteam'] === null) {
            $object->setIsSubteam(null);
        }
        if (\array_key_exists('is_usergroup', $data) && $data['is_usergroup'] !== null) {
            $object->setIsUsergroup($data['is_usergroup']);
        }
        elseif (\array_key_exists('is_usergroup', $data) && $data['is_usergroup'] === null) {
            $object->setIsUsergroup(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('prefs', $data) && $data['prefs'] !== null) {
            $object->setPrefs($this->denormalizer->denormalize($data['prefs'], 'JoliCode\\Slack\\Api\\Model\\ObjsSubteamPrefs', 'json', $context));
        }
        elseif (\array_key_exists('prefs', $data) && $data['prefs'] === null) {
            $object->setPrefs(null);
        }
        if (\array_key_exists('team_id', $data) && $data['team_id'] !== null) {
            $object->setTeamId($data['team_id']);
        }
        elseif (\array_key_exists('team_id', $data) && $data['team_id'] === null) {
            $object->setTeamId(null);
        }
        if (\array_key_exists('updated_by', $data) && $data['updated_by'] !== null) {
            $object->setUpdatedBy($data['updated_by']);
        }
        elseif (\array_key_exists('updated_by', $data) && $data['updated_by'] === null) {
            $object->setUpdatedBy(null);
        }
        if (\array_key_exists('user_count', $data) && $data['user_count'] !== null) {
            $object->setUserCount($data['user_count']);
        }
        elseif (\array_key_exists('user_count', $data) && $data['user_count'] === null) {
            $object->setUserCount(null);
        }
        if (\array_key_exists('users', $data) && $data['users'] !== null) {
            $values = array();
            foreach ($data['users'] as $value) {
                $values[] = $value;
            }
            $object->setUsers($values);
        }
        elseif (\array_key_exists('users', $data) && $data['users'] === null) {
            $object->setUsers(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['auto_provision'] = $object->getAutoProvision();
        $data['auto_type'] = $object->getAutoType();
        if (null !== $object->getChannelCount()) {
            $data['channel_count'] = $object->getChannelCount();
        }
        $data['created_by'] = $object->getCreatedBy();
        $data['date_create'] = $object->getDateCreate();
        $data['date_delete'] = $object->getDateDelete();
        $data['date_update'] = $object->getDateUpdate();
        $data['deleted_by'] = $object->getDeletedBy();
        $data['description'] = $object->getDescription();
        $data['enterprise_subteam_id'] = $object->getEnterpriseSubteamId();
        $data['handle'] = $object->getHandle();
        $data['id'] = $object->getId();
        $data['is_external'] = $object->getIsExternal();
        $data['is_subteam'] = $object->getIsSubteam();
        $data['is_usergroup'] = $object->getIsUsergroup();
        $data['name'] = $object->getName();
        $data['prefs'] = $this->normalizer->normalize($object->getPrefs(), 'json', $context);
        $data['team_id'] = $object->getTeamId();
        $data['updated_by'] = $object->getUpdatedBy();
        if (null !== $object->getUserCount()) {
            $data['user_count'] = $object->getUserCount();
        }
        if (null !== $object->getUsers()) {
            $values = array();
            foreach ($object->getUsers() as $value) {
                $values[] = $value;
            }
            $data['users'] = $values;
        }
        return $data;
    }
}