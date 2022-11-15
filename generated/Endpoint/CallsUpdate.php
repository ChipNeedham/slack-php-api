<?php

namespace JoliCode\Slack\Api\Endpoint;

class CallsUpdate extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Updates information about a Call.
     *
     * @param array $formParameters {
     *     @var string $desktop_app_join_url When supplied, available Slack clients will attempt to directly launch the 3rd-party Call with this URL.
     *     @var string $id `id` returned by the [`calls.add`](/methods/calls.add) method.
     *     @var string $join_url The URL required for a client to join the Call.
     *     @var string $title The name of the Call.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `calls:write`
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
        return '/calls.update';
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
        $optionsResolver->setDefined(array('desktop_app_join_url', 'id', 'join_url', 'title'));
        $optionsResolver->setRequired(array('id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('desktop_app_join_url', array('string'));
        $optionsResolver->setAllowedTypes('id', array('string'));
        $optionsResolver->setAllowedTypes('join_url', array('string'));
        $optionsResolver->setAllowedTypes('title', array('string'));
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
     * @return null|\JoliCode\Slack\Api\Model\CallsUpdatePostResponse200|\JoliCode\Slack\Api\Model\CallsUpdatePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\CallsUpdatePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\CallsUpdatePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}