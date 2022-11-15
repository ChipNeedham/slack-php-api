<?php

namespace JoliCode\Slack\Api\Endpoint;

class ViewsPublish extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Publish a static view for a User.
     *
     * @param array $formParameters {
     *     @var string $hash A string that represents view state to protect against possible race conditions.
     *     @var string $user_id `id` of the user you want publish a view to.
     *     @var string $view A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
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
        return '/views.publish';
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
        $optionsResolver->setDefined(array('hash', 'user_id', 'view'));
        $optionsResolver->setRequired(array('user_id', 'view'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('hash', array('string'));
        $optionsResolver->setAllowedTypes('user_id', array('string'));
        $optionsResolver->setAllowedTypes('view', array('string'));
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
     * @return null|\JoliCode\Slack\Api\Model\ViewsPublishPostResponse200|\JoliCode\Slack\Api\Model\ViewsPublishPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ViewsPublishPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ViewsPublishPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}