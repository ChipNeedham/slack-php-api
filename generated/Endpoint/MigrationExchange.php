<?php

namespace JoliCode\Slack\Api\Endpoint;

class MigrationExchange extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * For Enterprise Grid workspaces, map local user IDs to global user IDs
     *
     * @param array $queryParameters {
     *     @var string $team_id Specify team_id starts with `T` in case of Org Token
     *     @var bool $to_old Specify `true` to convert `W` global user IDs to workspace-specific `U` IDs. Defaults to `false`.
     *     @var string $token Authentication token. Requires scope: `tokens.basic`
     *     @var string $users A comma-separated list of user ids, up to 400 per request
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/migration.exchange';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('team_id', 'to_old', 'token', 'users'));
        $optionsResolver->setRequired(array('users'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('team_id', array('string'));
        $optionsResolver->setAllowedTypes('to_old', array('bool'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('users', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200|\JoliCode\Slack\Api\Model\MigrationExchangeGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}