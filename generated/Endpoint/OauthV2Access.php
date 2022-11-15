<?php

namespace JoliCode\Slack\Api\Endpoint;

class OauthV2Access extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Exchanges a temporary OAuth verifier code for an access token.
     *
     * @param array $queryParameters {
     *     @var string $client_id Issued when you created your application.
     *     @var string $client_secret Issued when you created your application.
     *     @var string $code The `code` param returned via the OAuth callback.
     *     @var string $redirect_uri This must match the originally submitted URI (if one was sent).
     *     @var string $grant_type The grant_type param as described in the OAuth spec.
     *     @var string $refresh_token The refresh_token param as described in the OAuth spec.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/oauth.v2.access';
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
        $optionsResolver->setDefined(array('client_id', 'client_secret', 'code', 'redirect_uri', 'grant_type', 'refresh_token'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('client_id', array('string'));
        $optionsResolver->setAllowedTypes('client_secret', array('string'));
        $optionsResolver->setAllowedTypes('code', array('string'));
        $optionsResolver->setAllowedTypes('redirect_uri', array('string'));
        $optionsResolver->setAllowedTypes('grant_type', array('string'));
        $optionsResolver->setAllowedTypes('refresh_token', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\OauthV2AccessPostResponse200|\JoliCode\Slack\Api\Model\OauthV2AccessPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\OauthV2AccessPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\OauthV2AccessPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}