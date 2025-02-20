<?php

namespace JoliCode\Slack\Api\Endpoint;

class CallsEnd extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Ends a Call.
     *
     * @param array $formParameters {
     *     @var int $duration Call duration in seconds
     *     @var string $id `id` returned when registering the call using the [`calls.add`](/methods/calls.add) method.
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
        return '/calls.end';
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
        $optionsResolver->setDefined(array('duration', 'id'));
        $optionsResolver->setRequired(array('id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('duration', array('int'));
        $optionsResolver->setAllowedTypes('id', array('string'));
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
     * @return null|\JoliCode\Slack\Api\Model\CallsEndPostResponse200|\JoliCode\Slack\Api\Model\CallsEndPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\CallsEndPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\CallsEndPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}