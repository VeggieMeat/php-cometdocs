<?php

namespace Cometdocs;

use Cometdocs\Common\Http\Client as Client;
use Cometdocs\Common\Http\ClientInterface;
use Cometdocs\Common\Http\Request;

/**
 * Class Cometdocs
 * @package Cometdocs
 */
class Cometdocs extends Client implements ClientInterface
{

    /**
     *
     */
    const COMETDOCS_CONVERSION_ENDPOINT = 'https://www.cometdocs.com/conversionApi/v1/';

    /**
     * @var string
     */
    private $callbackUrl;
    /**
     * @var bool
     */
    private $testMode;
    /**
     * @var string
     */
    private $token;

    /**
     * @param string $token
     * @param string $callbackUrl
     */
    public function __construct($token, $callbackUrl = null) {
        $this->token = $token;
        $this->callbackUrl = $callbackUrl;
        parent::__construct(COMETDOCS_CONVERSION_ENDPOINT);
    }

    /**
     *
     */
    public function enableTestMode() {
        $this->testMode = 1;
    }

    /**
     * @return bool
     */
    public function getTestMode() {
        return $this->testMode;
    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param int $jobId
     */
    public function getJobStatus($jobId)
    {
        $request = Request::factory($this, 'getStatus');
        $request->addPostFields(array(
            'jobId' => $jobId,
        ));
    }

    /**
     * @param int $jobId
     */
    public function getCallbackStatus($jobId)
    {
        $request = Request::factory($this, 'getCallbackStatus');
        $request->addPostFields(array(
            'jobId' => $jobId,
        ));
    }

    /**
     * @param int $jobId
     */
    public function downloadJob($jobId)
    {
        $request = Request::factory($this, 'download');
        $request->addPostFields(array(
            'jobId' => $jobId,
        ));
    }

    /**
     * @param int $jobId
     */
    public function deleteJob($jobId)
    {
        $request = Request::factory($this, 'delete');
        $request->addPostFields(array(
            'jobId' => $jobId,
        ));
    }

    /**
     * @param string $extension
     */
    public function getConversionTypes($extension = NULL)
    {
        $request = Request::factory($this, 'getConversionTypes');
        if (isset($extension)) {
            $request->addPostFields(array(
                'inputExtension' => $extension,
            ));
        }
    }

    /**
     *
     */
    public function getRemainingCredits()
    {
        $request = Request::factory($this, 'getRemainingCredits');
        $response = $request->send();
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function DOC2DOCX()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\DOC2DOCX\Service', $this->callbackUrl, $this->testMode);
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function DOC2XLS()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\DOC2XLS\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function IMG2DOC()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\IMG2DOC\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function IMG2TXT()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\IMG2TXT\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function IMG2XLS()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\IMG2XLS\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2BMP()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2BMP\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2DOC()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2DOC\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2DWG()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2DWG\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2DXF()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2DXF\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2GIF()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2GIF\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2HTML()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2HTML\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2JPG()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2JPG\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2ODP()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2ODP\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2ODS()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2ODS\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2ODT()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2ODT\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2PNG()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2PNG\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2PPTX()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2PPTX\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2TIF()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2TIF\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2TXT()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2TXT\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function PDF2XLS()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\PDF2XLS\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function ToPDF()
    {
        return ServiceBuilder::factory($this, 'CometDocs\ToPDF\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XLS2DOC()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XLS2DOC\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2BMP()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2BMP\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2DOC()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2DOC\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2GIF()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2GIF\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2HTML()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2HTML\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2JPEG()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2JPEG\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2ODP()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2ODP\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2ODS()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2ODS\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2ODT()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2ODT\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2PNG()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2PNG\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2TIF()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2TIF\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2TXT()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2TXT\Service');
    }

    /**
     * @return Common\Service\ServiceInterface
     */
    public function XPS2XLS()
    {
        return ServiceBuilder::factory($this, 'Cometdocs\XPS2XLS\Service');
    }

}