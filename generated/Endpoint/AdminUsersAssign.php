<?php

namespace JoliCode\Slack\Api\Endpoint;

class AdminUsersAssign extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Add an Enterprise user to a workspace.
     *
     * @param array $formParameters {
     *     @var string $channel_ids Comma separated values of channel IDs to add user in the new workspace.
     *     @var bool $is_restricted True if user should be added to the workspace as a guest.
     *     @var bool $is_ultra_restricted True if user should be added to the workspace as a single-channel guest.
     *     @var string $team_id The ID (`T1234`) of the workspace.
     *     @var string $user_id The ID of the user to add to the workspace.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     */
    public function __construct(array $formParameters = array(), array $headerParameters = array())
    {
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/admin.users.assign';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getFormBody();
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getFormOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(array('channel_ids', 'is_restricted', 'is_ultra_restricted', 'team_id', 'user_id'));
        $optionsResolver->setRequired(array('team_id', 'user_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channel_ids', array('string'));
        $optionsResolver->setAllowedTypes('is_restricted', array('bool'));
        $optionsResolver->setAllowedTypes('is_ultra_restricted', array('bool'));
        $optionsResolver->setAllowedTypes('team_id', array('string'));
        $optionsResolver->setAllowedTypes('user_id', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('token'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('token', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\AdminUsersAssignPostResponse200|\JoliCode\Slack\Api\Model\AdminUsersAssignPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminUsersAssignPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminUsersAssignPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}