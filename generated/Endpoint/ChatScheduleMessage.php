<?php

namespace JoliCode\Slack\Api\Endpoint;

class ChatScheduleMessage extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Schedules a message to be sent to a channel.
     *
     * @param array $formParameters {
     *     @var bool $as_user Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [chat.postMessage](chat.postMessage#authorship).
     *     @var string $attachments A JSON-based array of structured attachments, presented as a URL-encoded string.
     *     @var string $blocks A JSON-based array of structured blocks, presented as a URL-encoded string.
     *     @var string $channel Channel, private group, or DM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *     @var bool $link_names Find and link channel names and usernames.
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [chat.postMessage](chat.postMessage#formatting).
     *     @var int $post_at Unix EPOCH timestamp of time in future to send the message.
     *     @var bool $reply_broadcast Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     *     @var string $text How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *     @var string $thread_ts Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *     @var bool $unfurl_links Pass true to enable unfurling of primarily text-based content.
     *     @var bool $unfurl_media Pass false to disable unfurling of media content.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `chat:write`
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
        return '/chat.scheduleMessage';
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
        $optionsResolver->setDefined(array('as_user', 'attachments', 'blocks', 'channel', 'link_names', 'parse', 'post_at', 'reply_broadcast', 'text', 'thread_ts', 'unfurl_links', 'unfurl_media'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('as_user', array('bool'));
        $optionsResolver->setAllowedTypes('attachments', array('string'));
        $optionsResolver->setAllowedTypes('blocks', array('string'));
        $optionsResolver->setAllowedTypes('channel', array('string'));
        $optionsResolver->setAllowedTypes('link_names', array('bool'));
        $optionsResolver->setAllowedTypes('parse', array('string'));
        $optionsResolver->setAllowedTypes('post_at', array('int'));
        $optionsResolver->setAllowedTypes('reply_broadcast', array('bool'));
        $optionsResolver->setAllowedTypes('text', array('string'));
        $optionsResolver->setAllowedTypes('thread_ts', array('string'));
        $optionsResolver->setAllowedTypes('unfurl_links', array('bool'));
        $optionsResolver->setAllowedTypes('unfurl_media', array('bool'));
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
     * @return null|\JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}