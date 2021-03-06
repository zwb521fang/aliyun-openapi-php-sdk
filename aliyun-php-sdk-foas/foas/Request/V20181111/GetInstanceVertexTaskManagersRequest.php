<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetInstanceVertexTaskManagers
 *
 * @method string getprojectName()
 * @method string getinstanceId()
 * @method string getvertexId()
 * @method string getjobName()
 */
class GetInstanceVertexTaskManagersRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]/vertices/[vertexId]/taskmanagers';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'GetInstanceVertexTaskManagers',
            'foas'
        );
    }

    /**
     * @param string $projectName
     *
     * @return $this
     */
    public function setprojectName($projectName)
    {
        $this->requestParameters['projectName'] = $projectName;
        $this->pathParameters['projectName'] = $projectName;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setinstanceId($instanceId)
    {
        $this->requestParameters['instanceId'] = $instanceId;
        $this->pathParameters['instanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $vertexId
     *
     * @return $this
     */
    public function setvertexId($vertexId)
    {
        $this->requestParameters['vertexId'] = $vertexId;
        $this->pathParameters['vertexId'] = $vertexId;

        return $this;
    }

    /**
     * @param string $jobName
     *
     * @return $this
     */
    public function setjobName($jobName)
    {
        $this->requestParameters['jobName'] = $jobName;
        $this->pathParameters['jobName'] = $jobName;

        return $this;
    }
}
