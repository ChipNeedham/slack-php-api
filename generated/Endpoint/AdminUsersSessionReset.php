<?php

namespace JoliCode\Slack\Api\Endpoint;

class AdminUsersSessionReset extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Wipes all valid sessions on all devices for a given user
     *
     * @param array $formParameters {
     *     @var bool $mobile_only Only expire mobile sessions (default: false)
     *     @var string $user_id The ID of the user to wipe sessions for
     *     @var bool $web_only Only expire web sessions (default: false)
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
        return '/admin.users.session.reset';
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
        $optionsResolver->setDefined(array('mobile_only', 'user_id', 'web_only'));
        $optionsResolver->setRequired(array('user_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('mobile_only', array('bool'));
        $optionsResolver->setAllowedTypes('user_id', array('string'));
        $optionsResolver->setAllowedTypes('web_only', array('bool'));
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
     * @return null|\JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponse200|\JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminUsersSessionResetPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminUsersSessionResetPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}