<?php

namespace JoliCode\Slack\Api\Endpoint;

class AdminUsergroupsRemoveChannels extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Remove one or more default channels from an org-level IDP group (user group).
     *
     * @param array $formParameters {
     *     @var string $channel_ids Comma-separated string of channel IDs
     *     @var string $usergroup_id ID of the IDP Group
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.usergroups:write`
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
        return '/admin.usergroups.removeChannels';
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
        $optionsResolver->setDefined(array('channel_ids', 'usergroup_id'));
        $optionsResolver->setRequired(array('channel_ids', 'usergroup_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channel_ids', array('string'));
        $optionsResolver->setAllowedTypes('usergroup_id', array('string'));
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
     * @return null|\JoliCode\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponse200|\JoliCode\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminUsergroupsRemoveChannelsPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminUsergroupsRemoveChannelsPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}