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
class ObjsUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsUser';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsUser';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsUser();
        if (\array_key_exists('tz_offset', $data) && \is_int($data['tz_offset'])) {
            $data['tz_offset'] = (double) $data['tz_offset'];
        }
        if (\array_key_exists('updated', $data) && \is_int($data['updated'])) {
            $data['updated'] = (double) $data['updated'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('color', $data) && $data['color'] !== null) {
            $object->setColor($data['color']);
        }
        elseif (\array_key_exists('color', $data) && $data['color'] === null) {
            $object->setColor(null);
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted($data['deleted']);
        }
        elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('enterprise_user', $data) && $data['enterprise_user'] !== null) {
            $object->setEnterpriseUser($this->denormalizer->denormalize($data['enterprise_user'], 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser', 'json', $context));
        }
        elseif (\array_key_exists('enterprise_user', $data) && $data['enterprise_user'] === null) {
            $object->setEnterpriseUser(null);
        }
        if (\array_key_exists('has_2fa', $data) && $data['has_2fa'] !== null) {
            $object->setHas2fa($data['has_2fa']);
        }
        elseif (\array_key_exists('has_2fa', $data) && $data['has_2fa'] === null) {
            $object->setHas2fa(null);
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
        if (\array_key_exists('is_app_user', $data) && $data['is_app_user'] !== null) {
            $object->setIsAppUser($data['is_app_user']);
        }
        elseif (\array_key_exists('is_app_user', $data) && $data['is_app_user'] === null) {
            $object->setIsAppUser(null);
        }
        if (\array_key_exists('is_bot', $data) && $data['is_bot'] !== null) {
            $object->setIsBot($data['is_bot']);
        }
        elseif (\array_key_exists('is_bot', $data) && $data['is_bot'] === null) {
            $object->setIsBot(null);
        }
        if (\array_key_exists('is_external', $data) && $data['is_external'] !== null) {
            $object->setIsExternal($data['is_external']);
        }
        elseif (\array_key_exists('is_external', $data) && $data['is_external'] === null) {
            $object->setIsExternal(null);
        }
        if (\array_key_exists('is_forgotten', $data) && $data['is_forgotten'] !== null) {
            $object->setIsForgotten($data['is_forgotten']);
        }
        elseif (\array_key_exists('is_forgotten', $data) && $data['is_forgotten'] === null) {
            $object->setIsForgotten(null);
        }
        if (\array_key_exists('is_invited_user', $data) && $data['is_invited_user'] !== null) {
            $object->setIsInvitedUser($data['is_invited_user']);
        }
        elseif (\array_key_exists('is_invited_user', $data) && $data['is_invited_user'] === null) {
            $object->setIsInvitedUser(null);
        }
        if (\array_key_exists('is_owner', $data) && $data['is_owner'] !== null) {
            $object->setIsOwner($data['is_owner']);
        }
        elseif (\array_key_exists('is_owner', $data) && $data['is_owner'] === null) {
            $object->setIsOwner(null);
        }
        if (\array_key_exists('is_primary_owner', $data) && $data['is_primary_owner'] !== null) {
            $object->setIsPrimaryOwner($data['is_primary_owner']);
        }
        elseif (\array_key_exists('is_primary_owner', $data) && $data['is_primary_owner'] === null) {
            $object->setIsPrimaryOwner(null);
        }
        if (\array_key_exists('is_restricted', $data) && $data['is_restricted'] !== null) {
            $object->setIsRestricted($data['is_restricted']);
        }
        elseif (\array_key_exists('is_restricted', $data) && $data['is_restricted'] === null) {
            $object->setIsRestricted(null);
        }
        if (\array_key_exists('is_stranger', $data) && $data['is_stranger'] !== null) {
            $object->setIsStranger($data['is_stranger']);
        }
        elseif (\array_key_exists('is_stranger', $data) && $data['is_stranger'] === null) {
            $object->setIsStranger(null);
        }
        if (\array_key_exists('is_ultra_restricted', $data) && $data['is_ultra_restricted'] !== null) {
            $object->setIsUltraRestricted($data['is_ultra_restricted']);
        }
        elseif (\array_key_exists('is_ultra_restricted', $data) && $data['is_ultra_restricted'] === null) {
            $object->setIsUltraRestricted(null);
        }
        if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
            $object->setLocale($data['locale']);
        }
        elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
            $object->setLocale(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('presence', $data) && $data['presence'] !== null) {
            $object->setPresence($data['presence']);
        }
        elseif (\array_key_exists('presence', $data) && $data['presence'] === null) {
            $object->setPresence(null);
        }
        if (\array_key_exists('profile', $data) && $data['profile'] !== null) {
            $object->setProfile($this->denormalizer->denormalize($data['profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfile', 'json', $context));
        }
        elseif (\array_key_exists('profile', $data) && $data['profile'] === null) {
            $object->setProfile(null);
        }
        if (\array_key_exists('real_name', $data) && $data['real_name'] !== null) {
            $object->setRealName($data['real_name']);
        }
        elseif (\array_key_exists('real_name', $data) && $data['real_name'] === null) {
            $object->setRealName(null);
        }
        if (\array_key_exists('team', $data) && $data['team'] !== null) {
            $object->setTeam($data['team']);
        }
        elseif (\array_key_exists('team', $data) && $data['team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('team_id', $data) && $data['team_id'] !== null) {
            $object->setTeamId($data['team_id']);
        }
        elseif (\array_key_exists('team_id', $data) && $data['team_id'] === null) {
            $object->setTeamId(null);
        }
        if (\array_key_exists('team_profile', $data) && $data['team_profile'] !== null) {
            $object->setTeamProfile($this->denormalizer->denormalize($data['team_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserTeamProfile', 'json', $context));
        }
        elseif (\array_key_exists('team_profile', $data) && $data['team_profile'] === null) {
            $object->setTeamProfile(null);
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
        if (\array_key_exists('two_factor_type', $data) && $data['two_factor_type'] !== null) {
            $object->setTwoFactorType($data['two_factor_type']);
        }
        elseif (\array_key_exists('two_factor_type', $data) && $data['two_factor_type'] === null) {
            $object->setTwoFactorType(null);
        }
        if (\array_key_exists('tz', $data) && $data['tz'] !== null) {
            $object->setTz($data['tz']);
        }
        elseif (\array_key_exists('tz', $data) && $data['tz'] === null) {
            $object->setTz(null);
        }
        if (\array_key_exists('tz_label', $data) && $data['tz_label'] !== null) {
            $object->setTzLabel($data['tz_label']);
        }
        elseif (\array_key_exists('tz_label', $data) && $data['tz_label'] === null) {
            $object->setTzLabel(null);
        }
        if (\array_key_exists('tz_offset', $data) && $data['tz_offset'] !== null) {
            $object->setTzOffset($data['tz_offset']);
        }
        elseif (\array_key_exists('tz_offset', $data) && $data['tz_offset'] === null) {
            $object->setTzOffset(null);
        }
        if (\array_key_exists('updated', $data) && $data['updated'] !== null) {
            $object->setUpdated($data['updated']);
        }
        elseif (\array_key_exists('updated', $data) && $data['updated'] === null) {
            $object->setUpdated(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getColor()) {
            $data['color'] = $object->getColor();
        }
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getEnterpriseUser()) {
            $data['enterprise_user'] = $this->normalizer->normalize($object->getEnterpriseUser(), 'json', $context);
        }
        if (null !== $object->getHas2fa()) {
            $data['has_2fa'] = $object->getHas2fa();
        }
        $data['id'] = $object->getId();
        if (null !== $object->getIsAdmin()) {
            $data['is_admin'] = $object->getIsAdmin();
        }
        $data['is_app_user'] = $object->getIsAppUser();
        $data['is_bot'] = $object->getIsBot();
        if (null !== $object->getIsExternal()) {
            $data['is_external'] = $object->getIsExternal();
        }
        if (null !== $object->getIsForgotten()) {
            $data['is_forgotten'] = $object->getIsForgotten();
        }
        if (null !== $object->getIsInvitedUser()) {
            $data['is_invited_user'] = $object->getIsInvitedUser();
        }
        if (null !== $object->getIsOwner()) {
            $data['is_owner'] = $object->getIsOwner();
        }
        if (null !== $object->getIsPrimaryOwner()) {
            $data['is_primary_owner'] = $object->getIsPrimaryOwner();
        }
        if (null !== $object->getIsRestricted()) {
            $data['is_restricted'] = $object->getIsRestricted();
        }
        if (null !== $object->getIsStranger()) {
            $data['is_stranger'] = $object->getIsStranger();
        }
        if (null !== $object->getIsUltraRestricted()) {
            $data['is_ultra_restricted'] = $object->getIsUltraRestricted();
        }
        if (null !== $object->getLocale()) {
            $data['locale'] = $object->getLocale();
        }
        $data['name'] = $object->getName();
        if (null !== $object->getPresence()) {
            $data['presence'] = $object->getPresence();
        }
        $data['profile'] = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        if (null !== $object->getRealName()) {
            $data['real_name'] = $object->getRealName();
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        }
        if (null !== $object->getTeamId()) {
            $data['team_id'] = $object->getTeamId();
        }
        if (null !== $object->getTeamProfile()) {
            $data['team_profile'] = $this->normalizer->normalize($object->getTeamProfile(), 'json', $context);
        }
        if (null !== $object->getTeams()) {
            $values = array();
            foreach ($object->getTeams() as $value) {
                $values[] = $value;
            }
            $data['teams'] = $values;
        }
        if (null !== $object->getTwoFactorType()) {
            $data['two_factor_type'] = $object->getTwoFactorType();
        }
        if (null !== $object->getTz()) {
            $data['tz'] = $object->getTz();
        }
        if (null !== $object->getTzLabel()) {
            $data['tz_label'] = $object->getTzLabel();
        }
        if (null !== $object->getTzOffset()) {
            $data['tz_offset'] = $object->getTzOffset();
        }
        $data['updated'] = $object->getUpdated();
        return $data;
    }
}