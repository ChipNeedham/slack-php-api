<?php

namespace JoliCode\Slack\Api\Endpoint;

class AdminConversationsEkmListOriginalConnectedChannelInfo extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * List all disconnected channels—i.e., channels that were once connected to other workspaces and then disconnected—and the corresponding original channel IDs for key revocation with EKM.
     *
     * @param array $queryParameters {
     *     @var string $channel_ids A comma-separated list of channels to filter to.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $team_ids A comma-separated list of the workspaces to which the channels you would like returned belong.
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
        return '/admin.conversations.ekm.listOriginalConnectedChannelInfo';
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
        $optionsResolver->setDefined(array('channel_ids', 'cursor', 'limit', 'team_ids', 'token'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channel_ids', array('string'));
        $optionsResolver->setAllowedTypes('cursor', array('string'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('team_ids', array('string'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200|\JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}