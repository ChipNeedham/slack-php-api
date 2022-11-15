<?php

namespace JoliCode\Slack\Api\Endpoint;

class ViewsUpdate extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Update an existing view.
     *
     * @param array $formParameters {
     *     @var string $external_id A unique identifier of the view set by the developer. Must be unique for all views on a team. Max length of 255 characters. Either `view_id` or `external_id` is required.
     *     @var string $hash A string that represents view state to protect against possible race conditions.
     *     @var string $view A [view object](/reference/surfaces/views). This must be a JSON-encoded string.
     *     @var string $view_id A unique identifier of the view to be updated. Either `view_id` or `external_id` is required.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `none`
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
        return '/views.update';
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
        $optionsResolver->setDefined(array('external_id', 'hash', 'view', 'view_id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('external_id', array('string'));
        $optionsResolver->setAllowedTypes('hash', array('string'));
        $optionsResolver->setAllowedTypes('view', array('string'));
        $optionsResolver->setAllowedTypes('view_id', array('string'));
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
     * @return null|\JoliCode\Slack\Api\Model\ViewsUpdatePostResponse200|\JoliCode\Slack\Api\Model\ViewsUpdatePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ViewsUpdatePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ViewsUpdatePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}