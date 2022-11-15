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
class AuthTestGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\AuthTestGetResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Slack\\Api\\Model\\AuthTestGetResponse200';
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
        $object = new \JoliCode\Slack\Api\Model\AuthTestGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bot_id', $data) && $data['bot_id'] !== null) {
            $object->setBotId($data['bot_id']);
        }
        elseif (\array_key_exists('bot_id', $data) && $data['bot_id'] === null) {
            $object->setBotId(null);
        }
        if (\array_key_exists('is_enterprise_install', $data) && $data['is_enterprise_install'] !== null) {
            $object->setIsEnterpriseInstall($data['is_enterprise_install']);
        }
        elseif (\array_key_exists('is_enterprise_install', $data) && $data['is_enterprise_install'] === null) {
            $object->setIsEnterpriseInstall(null);
        }
        if (\array_key_exists('ok', $data) && $data['ok'] !== null) {
            $object->setOk($data['ok']);
        }
        elseif (\array_key_exists('ok', $data) && $data['ok'] === null) {
            $object->setOk(null);
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
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
        }
        elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
        }
        elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBotId()) {
            $data['bot_id'] = $object->getBotId();
        }
        if (null !== $object->getIsEnterpriseInstall()) {
            $data['is_enterprise_install'] = $object->getIsEnterpriseInstall();
        }
        $data['ok'] = $object->getOk();
        $data['team'] = $object->getTeam();
        $data['team_id'] = $object->getTeamId();
        $data['url'] = $object->getUrl();
        $data['user'] = $object->getUser();
        $data['user_id'] = $object->getUserId();
        return $data;
    }
}