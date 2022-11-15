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
class ObjsTeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsTeam';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsTeam';
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
        $object = new \JoliCode\Slack\Api\Model\ObjsTeam();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('archived', $data) && $data['archived'] !== null) {
            $object->setArchived($data['archived']);
        }
        elseif (\array_key_exists('archived', $data) && $data['archived'] === null) {
            $object->setArchived(null);
        }
        if (\array_key_exists('avatar_base_url', $data) && $data['avatar_base_url'] !== null) {
            $object->setAvatarBaseUrl($data['avatar_base_url']);
        }
        elseif (\array_key_exists('avatar_base_url', $data) && $data['avatar_base_url'] === null) {
            $object->setAvatarBaseUrl(null);
        }
        if (\array_key_exists('created', $data) && $data['created'] !== null) {
            $object->setCreated($data['created']);
        }
        elseif (\array_key_exists('created', $data) && $data['created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('date_create', $data) && $data['date_create'] !== null) {
            $object->setDateCreate($data['date_create']);
        }
        elseif (\array_key_exists('date_create', $data) && $data['date_create'] === null) {
            $object->setDateCreate(null);
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted($data['deleted']);
        }
        elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $value = $data['description'];
            if (is_string($data['description'])) {
                $value = $data['description'];
            }
            $object->setDescription($value);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('discoverable', $data) && $data['discoverable'] !== null) {
            $object->setDiscoverable($data['discoverable']);
        }
        elseif (\array_key_exists('discoverable', $data) && $data['discoverable'] === null) {
            $object->setDiscoverable(null);
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($data['domain']);
        }
        elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('email_domain', $data) && $data['email_domain'] !== null) {
            $object->setEmailDomain($data['email_domain']);
        }
        elseif (\array_key_exists('email_domain', $data) && $data['email_domain'] === null) {
            $object->setEmailDomain(null);
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
        if (\array_key_exists('external_org_migrations', $data) && $data['external_org_migrations'] !== null) {
            $object->setExternalOrgMigrations($this->denormalizer->denormalize($data['external_org_migrations'], 'JoliCode\\Slack\\Api\\Model\\ObjsExternalOrgMigrations', 'json', $context));
        }
        elseif (\array_key_exists('external_org_migrations', $data) && $data['external_org_migrations'] === null) {
            $object->setExternalOrgMigrations(null);
        }
        if (\array_key_exists('has_compliance_export', $data) && $data['has_compliance_export'] !== null) {
            $object->setHasComplianceExport($data['has_compliance_export']);
        }
        elseif (\array_key_exists('has_compliance_export', $data) && $data['has_compliance_export'] === null) {
            $object->setHasComplianceExport(null);
        }
        if (\array_key_exists('icon', $data) && $data['icon'] !== null) {
            $object->setIcon($this->denormalizer->denormalize($data['icon'], 'JoliCode\\Slack\\Api\\Model\\ObjsIcon', 'json', $context));
        }
        elseif (\array_key_exists('icon', $data) && $data['icon'] === null) {
            $object->setIcon(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_assigned', $data) && $data['is_assigned'] !== null) {
            $object->setIsAssigned($data['is_assigned']);
        }
        elseif (\array_key_exists('is_assigned', $data) && $data['is_assigned'] === null) {
            $object->setIsAssigned(null);
        }
        if (\array_key_exists('is_enterprise', $data) && $data['is_enterprise'] !== null) {
            $object->setIsEnterprise($data['is_enterprise']);
        }
        elseif (\array_key_exists('is_enterprise', $data) && $data['is_enterprise'] === null) {
            $object->setIsEnterprise(null);
        }
        if (\array_key_exists('is_over_storage_limit', $data) && $data['is_over_storage_limit'] !== null) {
            $object->setIsOverStorageLimit($data['is_over_storage_limit']);
        }
        elseif (\array_key_exists('is_over_storage_limit', $data) && $data['is_over_storage_limit'] === null) {
            $object->setIsOverStorageLimit(null);
        }
        if (\array_key_exists('limit_ts', $data) && $data['limit_ts'] !== null) {
            $object->setLimitTs($data['limit_ts']);
        }
        elseif (\array_key_exists('limit_ts', $data) && $data['limit_ts'] === null) {
            $object->setLimitTs(null);
        }
        if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
            $object->setLocale($data['locale']);
        }
        elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
            $object->setLocale(null);
        }
        if (\array_key_exists('messages_count', $data) && $data['messages_count'] !== null) {
            $object->setMessagesCount($data['messages_count']);
        }
        elseif (\array_key_exists('messages_count', $data) && $data['messages_count'] === null) {
            $object->setMessagesCount(null);
        }
        if (\array_key_exists('msg_edit_window_mins', $data) && $data['msg_edit_window_mins'] !== null) {
            $object->setMsgEditWindowMins($data['msg_edit_window_mins']);
        }
        elseif (\array_key_exists('msg_edit_window_mins', $data) && $data['msg_edit_window_mins'] === null) {
            $object->setMsgEditWindowMins(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('over_integrations_limit', $data) && $data['over_integrations_limit'] !== null) {
            $object->setOverIntegrationsLimit($data['over_integrations_limit']);
        }
        elseif (\array_key_exists('over_integrations_limit', $data) && $data['over_integrations_limit'] === null) {
            $object->setOverIntegrationsLimit(null);
        }
        if (\array_key_exists('over_storage_limit', $data) && $data['over_storage_limit'] !== null) {
            $object->setOverStorageLimit($data['over_storage_limit']);
        }
        elseif (\array_key_exists('over_storage_limit', $data) && $data['over_storage_limit'] === null) {
            $object->setOverStorageLimit(null);
        }
        if (\array_key_exists('pay_prod_cur', $data) && $data['pay_prod_cur'] !== null) {
            $object->setPayProdCur($data['pay_prod_cur']);
        }
        elseif (\array_key_exists('pay_prod_cur', $data) && $data['pay_prod_cur'] === null) {
            $object->setPayProdCur(null);
        }
        if (\array_key_exists('plan', $data) && $data['plan'] !== null) {
            $object->setPlan($data['plan']);
        }
        elseif (\array_key_exists('plan', $data) && $data['plan'] === null) {
            $object->setPlan(null);
        }
        if (\array_key_exists('primary_owner', $data) && $data['primary_owner'] !== null) {
            $object->setPrimaryOwner($this->denormalizer->denormalize($data['primary_owner'], 'JoliCode\\Slack\\Api\\Model\\ObjsPrimaryOwner', 'json', $context));
        }
        elseif (\array_key_exists('primary_owner', $data) && $data['primary_owner'] === null) {
            $object->setPrimaryOwner(null);
        }
        if (\array_key_exists('sso_provider', $data) && $data['sso_provider'] !== null) {
            $object->setSsoProvider($this->denormalizer->denormalize($data['sso_provider'], 'JoliCode\\Slack\\Api\\Model\\ObjsTeamSsoProvider', 'json', $context));
        }
        elseif (\array_key_exists('sso_provider', $data) && $data['sso_provider'] === null) {
            $object->setSsoProvider(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getArchived()) {
            $data['archived'] = $object->getArchived();
        }
        if (null !== $object->getAvatarBaseUrl()) {
            $data['avatar_base_url'] = $object->getAvatarBaseUrl();
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if (null !== $object->getDateCreate()) {
            $data['date_create'] = $object->getDateCreate();
        }
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getDescription()) {
            $value = $object->getDescription();
            if (is_string($object->getDescription())) {
                $value = $object->getDescription();
            }
            $data['description'] = $value;
        }
        if (null !== $object->getDiscoverable()) {
            $data['discoverable'] = $object->getDiscoverable();
        }
        $data['domain'] = $object->getDomain();
        $data['email_domain'] = $object->getEmailDomain();
        if (null !== $object->getEnterpriseId()) {
            $data['enterprise_id'] = $object->getEnterpriseId();
        }
        if (null !== $object->getEnterpriseName()) {
            $data['enterprise_name'] = $object->getEnterpriseName();
        }
        if (null !== $object->getExternalOrgMigrations()) {
            $data['external_org_migrations'] = $this->normalizer->normalize($object->getExternalOrgMigrations(), 'json', $context);
        }
        if (null !== $object->getHasComplianceExport()) {
            $data['has_compliance_export'] = $object->getHasComplianceExport();
        }
        $data['icon'] = $this->normalizer->normalize($object->getIcon(), 'json', $context);
        $data['id'] = $object->getId();
        if (null !== $object->getIsAssigned()) {
            $data['is_assigned'] = $object->getIsAssigned();
        }
        if (null !== $object->getIsEnterprise()) {
            $data['is_enterprise'] = $object->getIsEnterprise();
        }
        if (null !== $object->getIsOverStorageLimit()) {
            $data['is_over_storage_limit'] = $object->getIsOverStorageLimit();
        }
        if (null !== $object->getLimitTs()) {
            $data['limit_ts'] = $object->getLimitTs();
        }
        if (null !== $object->getLocale()) {
            $data['locale'] = $object->getLocale();
        }
        if (null !== $object->getMessagesCount()) {
            $data['messages_count'] = $object->getMessagesCount();
        }
        if (null !== $object->getMsgEditWindowMins()) {
            $data['msg_edit_window_mins'] = $object->getMsgEditWindowMins();
        }
        $data['name'] = $object->getName();
        if (null !== $object->getOverIntegrationsLimit()) {
            $data['over_integrations_limit'] = $object->getOverIntegrationsLimit();
        }
        if (null !== $object->getOverStorageLimit()) {
            $data['over_storage_limit'] = $object->getOverStorageLimit();
        }
        if (null !== $object->getPayProdCur()) {
            $data['pay_prod_cur'] = $object->getPayProdCur();
        }
        if (null !== $object->getPlan()) {
            $data['plan'] = $object->getPlan();
        }
        if (null !== $object->getPrimaryOwner()) {
            $data['primary_owner'] = $this->normalizer->normalize($object->getPrimaryOwner(), 'json', $context);
        }
        if (null !== $object->getSsoProvider()) {
            $data['sso_provider'] = $this->normalizer->normalize($object->getSsoProvider(), 'json', $context);
        }
        return $data;
    }
}