<?php

namespace JoliCode\Slack\Api\Endpoint;

class UsersSetPhoto extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Set the user profile photo
     *
     * @param array $formParameters {
     *     @var string $crop_w Width/height of crop box (always square)
     *     @var string $crop_x X coordinate of top-left corner of crop box
     *     @var string $crop_y Y coordinate of top-left corner of crop box
     *     @var string $image File contents via `multipart/form-data`.
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
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
        return '/users.setPhoto';
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
        $optionsResolver->setDefined(array('crop_w', 'crop_x', 'crop_y', 'image', 'token'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('crop_w', array('string'));
        $optionsResolver->setAllowedTypes('crop_x', array('string'));
        $optionsResolver->setAllowedTypes('crop_y', array('string'));
        $optionsResolver->setAllowedTypes('image', array('string'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200|\JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}