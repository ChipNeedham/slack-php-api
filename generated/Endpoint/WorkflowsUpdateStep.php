<?php

namespace JoliCode\Slack\Api\Endpoint;

class WorkflowsUpdateStep extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Update the configuration for a workflow extension step.
     *
     * @param array $formParameters {
     *     @var string $inputs A JSON key-value map of inputs required from a user during configuration. This is the data your app expects to receive when the workflow step starts. **Please note**: the embedded variable format is set and replaced by the workflow system. You cannot create custom variables that will be replaced at runtime. [Read more about variables in workflow steps here](/workflows/steps#variables).
     *     @var string $outputs An JSON array of output objects used during step execution. This is the data your app agrees to provide when your workflow step was executed.
     *     @var string $step_image_url An optional field that can be used to override app image that is shown in the Workflow Builder.
     *     @var string $step_name An optional field that can be used to override the step name that is shown in the Workflow Builder.
     *     @var string $workflow_step_edit_id A context identifier provided with `view_submission` payloads used to call back to `workflows.updateStep`.
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
        return '/workflows.updateStep';
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
        $optionsResolver->setDefined(array('inputs', 'outputs', 'step_image_url', 'step_name', 'workflow_step_edit_id'));
        $optionsResolver->setRequired(array('workflow_step_edit_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('inputs', array('string'));
        $optionsResolver->setAllowedTypes('outputs', array('string'));
        $optionsResolver->setAllowedTypes('step_image_url', array('string'));
        $optionsResolver->setAllowedTypes('step_name', array('string'));
        $optionsResolver->setAllowedTypes('workflow_step_edit_id', array('string'));
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
     * @return null|\JoliCode\Slack\Api\Model\WorkflowsUpdateStepPostResponse200|\JoliCode\Slack\Api\Model\WorkflowsUpdateStepPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\WorkflowsUpdateStepPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\WorkflowsUpdateStepPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}