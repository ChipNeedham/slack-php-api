<?php

namespace JoliCode\Slack\Api\Endpoint;

class AdminConversationsRestrictAccessRemoveGroup extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Remove a linked IDP group linked from a private channel
     *
     * @param array $formParameters {
     *     @var string $channel_id The channel to remove the linked group from.
     *     @var string $group_id The [IDP Group](https://slack.com/help/articles/115001435788-Connect-identity-provider-groups-to-your-Enterprise-Grid-org) ID to remove from the private channel.
     *     @var string $team_id The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     */
    public function __construct(array $formParameters = array())
    {
        $this->formParameters = $formParameters;
    }
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/admin.conversations.restrictAccess.removeGroup';
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
        $optionsResolver->setDefined(array('channel_id', 'group_id', 'team_id', 'token'));
        $optionsResolver->setRequired(array('channel_id', 'group_id', 'team_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channel_id', array('string'));
        $optionsResolver->setAllowedTypes('group_id', array('string'));
        $optionsResolver->setAllowedTypes('team_id', array('string'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsRestrictAccessRemoveGroupPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsRestrictAccessRemoveGroupPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}