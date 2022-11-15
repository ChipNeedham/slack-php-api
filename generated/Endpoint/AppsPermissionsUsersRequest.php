<?php

namespace JoliCode\Slack\Api\Endpoint;

class AppsPermissionsUsersRequest extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Enables an app to trigger a permissions modal to grant an app access to a user access scope.
     *
     * @param array $queryParameters {
     *     @var string $scopes A comma separated list of user scopes to request for
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $trigger_id Token used to trigger the request
     *     @var string $user The user this scope is being requested for
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
        return '/apps.permissions.users.request';
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
        $optionsResolver->setDefined(array('scopes', 'token', 'trigger_id', 'user'));
        $optionsResolver->setRequired(array('scopes', 'trigger_id', 'user'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('scopes', array('string'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('trigger_id', array('string'));
        $optionsResolver->setAllowedTypes('user', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsUsersRequestGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsUsersRequestGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}