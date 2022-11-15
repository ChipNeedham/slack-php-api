<?php

namespace JoliCode\Slack\Api\Endpoint;

class AdminConversationsRestrictAccessListGroups extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * List all IDP Groups linked to a channel
     *
     * @param array $queryParameters {
     *     @var string $channel_id 
     *     @var string $team_id The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
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
        return '/admin.conversations.restrictAccess.listGroups';
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
        $optionsResolver->setDefined(array('channel_id', 'team_id', 'token'));
        $optionsResolver->setRequired(array('channel_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channel_id', array('string'));
        $optionsResolver->setAllowedTypes('team_id', array('string'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponse200|\JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsRestrictAccessListGroupsGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsRestrictAccessListGroupsGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}