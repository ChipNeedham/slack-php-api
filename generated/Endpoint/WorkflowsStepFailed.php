<?php

namespace JoliCode\Slack\Api\Endpoint;

class WorkflowsStepFailed extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Indicate that an app's step in a workflow failed to execute.
     *
     * @param array $formParameters {
     *     @var string $error A JSON-based object with a `message` property that should contain a human readable error message.
     *     @var string $workflow_step_execute_id Context identifier that maps to the correct workflow step execution.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `workflow.steps:execute`
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
        return '/workflows.stepFailed';
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
        $optionsResolver->setDefined(array('error', 'workflow_step_execute_id'));
        $optionsResolver->setRequired(array('error', 'workflow_step_execute_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('error', array('string'));
        $optionsResolver->setAllowedTypes('workflow_step_execute_id', array('string'));
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
     * @return null|\JoliCode\Slack\Api\Model\WorkflowsStepFailedPostResponse200|\JoliCode\Slack\Api\Model\WorkflowsStepFailedPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\WorkflowsStepFailedPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\WorkflowsStepFailedPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}