<?php

namespace JoliCode\Slack\Api\Endpoint;

class AdminUsersInvite extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Invite a user to a workspace.
     *
     * @param array $formParameters {
     *     @var string $channel_ids A comma-separated list of `channel_id`s for this user to join. At least one channel is required.
     *     @var string $custom_message An optional message to send to the user in the invite email.
     *     @var string $email The email address of the person to invite.
     *     @var string $guest_expiration_ts Timestamp when guest account should be disabled. Only include this timestamp if you are inviting a guest user and you want their account to expire on a certain date.
     *     @var bool $is_restricted Is this user a multi-channel guest user? (default: false)
     *     @var bool $is_ultra_restricted Is this user a single channel guest user? (default: false)
     *     @var string $real_name Full name of the user.
     *     @var bool $resend Allow this invite to be resent in the future if a user has not signed up yet. (default: false)
     *     @var string $team_id The ID (`T1234`) of the workspace.
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
        return '/admin.users.invite';
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
        $optionsResolver->setDefined(array('channel_ids', 'custom_message', 'email', 'guest_expiration_ts', 'is_restricted', 'is_ultra_restricted', 'real_name', 'resend', 'team_id'));
        $optionsResolver->setRequired(array('channel_ids', 'email', 'team_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channel_ids', array('string'));
        $optionsResolver->setAllowedTypes('custom_message', array('string'));
        $optionsResolver->setAllowedTypes('email', array('string'));
        $optionsResolver->setAllowedTypes('guest_expiration_ts', array('string'));
        $optionsResolver->setAllowedTypes('is_restricted', array('bool'));
        $optionsResolver->setAllowedTypes('is_ultra_restricted', array('bool'));
        $optionsResolver->setAllowedTypes('real_name', array('string'));
        $optionsResolver->setAllowedTypes('resend', array('bool'));
        $optionsResolver->setAllowedTypes('team_id', array('string'));
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
     * @return null|\JoliCode\Slack\Api\Model\AdminUsersInvitePostResponse200|\JoliCode\Slack\Api\Model\AdminUsersInvitePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminUsersInvitePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminUsersInvitePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}