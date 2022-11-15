<?php

namespace JoliCode\Slack\Api\Endpoint;

class UsergroupsUpdate extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Update an existing User Group
     *
     * @param array $formParameters {
     *     @var string $channels A comma separated string of encoded channel IDs for which the User Group uses as a default.
     *     @var string $description A short description of the User Group.
     *     @var string $handle A mention handle. Must be unique among channels, users and User Groups.
     *     @var bool $include_count Include the number of users in the User Group.
     *     @var string $name A name for the User Group. Must be unique among User Groups.
     *     @var string $usergroup The encoded ID of the User Group to update.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
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
        return '/usergroups.update';
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
        $optionsResolver->setDefined(array('channels', 'description', 'handle', 'include_count', 'name', 'usergroup'));
        $optionsResolver->setRequired(array('usergroup'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channels', array('string'));
        $optionsResolver->setAllowedTypes('description', array('string'));
        $optionsResolver->setAllowedTypes('handle', array('string'));
        $optionsResolver->setAllowedTypes('include_count', array('bool'));
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('usergroup', array('string'));
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
     * @return null|\JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\UsergroupsUpdatePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\UsergroupsUpdatePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}