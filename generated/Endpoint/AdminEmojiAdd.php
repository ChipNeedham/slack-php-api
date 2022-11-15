<?php

namespace JoliCode\Slack\Api\Endpoint;

class AdminEmojiAdd extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Add an emoji.
     *
     * @param array $formParameters {
     *     @var string $name The name of the emoji to be removed. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     *     @var string $url The URL of a file to use as an image for the emoji. Square images under 128KB and with transparent backgrounds work best.
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
        return '/admin.emoji.add';
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
        $optionsResolver->setDefined(array('name', 'token', 'url'));
        $optionsResolver->setRequired(array('name', 'url'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('url', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\AdminEmojiAddPostResponse200|\JoliCode\Slack\Api\Model\AdminEmojiAddPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminEmojiAddPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminEmojiAddPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}