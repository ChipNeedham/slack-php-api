<?php

namespace JoliCode\Slack\Api\Endpoint;

class FilesUpload extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Uploads or creates a file.
     *
     * @param array $formParameters {
     *     @var string $channels Comma-separated list of channel names or IDs where the file will be shared.
     *     @var string $content File contents via a POST variable. If omitting this parameter, you must provide a `file`.
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file File contents via `multipart/form-data`. If omitting this parameter, you must submit `content`.
     *     @var string $filename Filename of file.
     *     @var string $filetype A [file type](/types/file#file_types) identifier.
     *     @var string $initial_comment The message text introducing the file in specified `channels`.
     *     @var string $thread_ts Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead.
     *     @var string $title Title of file.
     *     @var string $token Authentication token. Requires scope: `files:write:user`
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
        return '/files.upload';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getMultipartBody($streamFactory);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getFormOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(array('channels', 'content', 'file', 'filename', 'filetype', 'initial_comment', 'thread_ts', 'title', 'token'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channels', array('string'));
        $optionsResolver->setAllowedTypes('content', array('string'));
        $optionsResolver->setAllowedTypes('file', array('string', 'resource', '\\Psr\\Http\\Message\\StreamInterface'));
        $optionsResolver->setAllowedTypes('filename', array('string'));
        $optionsResolver->setAllowedTypes('filetype', array('string'));
        $optionsResolver->setAllowedTypes('initial_comment', array('string'));
        $optionsResolver->setAllowedTypes('thread_ts', array('string'));
        $optionsResolver->setAllowedTypes('title', array('string'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\FilesUploadPostResponse200|\JoliCode\Slack\Api\Model\FilesUploadPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesUploadPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesUploadPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}