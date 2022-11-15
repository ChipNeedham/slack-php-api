<?php

namespace JoliCode\Slack\Api\Endpoint;

class AppsEventAuthorizationsList extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Get a list of authorizations for the given event context. Each authorization represents an app installation that the event is visible to.
     *
     * @param array $queryParameters {
     *     @var string $cursor 
     *     @var string $event_context 
     *     @var int $limit 
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `authorizations:read`
     * }
     */
    public function __construct(array $queryParameters = array(), array $headerParameters = array())
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/apps.event.authorizations.list';
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
        $optionsResolver->setDefined(array('cursor', 'event_context', 'limit'));
        $optionsResolver->setRequired(array('event_context'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('cursor', array('string'));
        $optionsResolver->setAllowedTypes('event_context', array('string'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
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
     * @return null|\JoliCode\Slack\Api\Model\AppsEventAuthorizationsListGetResponse200|\JoliCode\Slack\Api\Model\AppsEventAuthorizationsListGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AppsEventAuthorizationsListGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AppsEventAuthorizationsListGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}