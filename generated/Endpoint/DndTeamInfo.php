<?php

namespace JoliCode\Slack\Api\Endpoint;

class DndTeamInfo extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Retrieves the Do Not Disturb status for up to 50 users on a team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `dnd:read`
     *     @var string $users Comma-separated list of users to fetch Do Not Disturb status for
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/dnd.teamInfo';
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
        $optionsResolver->setDefined(array('token', 'users'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('users', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\DndTeamInfoGetResponse200|\JoliCode\Slack\Api\Model\DndTeamInfoGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\DndTeamInfoGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\DndTeamInfoGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}