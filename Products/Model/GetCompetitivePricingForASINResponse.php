<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;


/**
 * GetCompetitivePricingForASINResponse
 *
 * Properties:
 * <ul>
 * <li>GetCompetitivePricingForASINResult: array</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetCompetitivePricingForASINResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'GetCompetitivePricingForASINResult' => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\GetCompetitivePricingForASINResult')),
            'ResponseMetadata'                   => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata'             => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetCompetitivePricingForASINResult property.
     *
     * @return List<GetCompetitivePricingForASINResult> GetCompetitivePricingForASINResult.
     */
    public function getGetCompetitivePricingForASINResult()
    {
        if ($this->_fields['GetCompetitivePricingForASINResult']['FieldValue'] == null) {
            $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'] = array();
        }
        return $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'];
    }

    /**
     * Set the value of the GetCompetitivePricingForASINResult property.
     *
     * @param array getCompetitivePricingForASINResult
     * @return this instance
     */
    public function setGetCompetitivePricingForASINResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear GetCompetitivePricingForASINResult.
     */
    public function unsetGetCompetitivePricingForASINResult()
    {
        $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'] = array();
    }

    /**
     * Check to see if GetCompetitivePricingForASINResult is set.
     *
     * @return true if GetCompetitivePricingForASINResult is set.
     */
    public function isSetGetCompetitivePricingForASINResult()
    {
        return !empty($this->_fields['GetCompetitivePricingForASINResult']['FieldValue']);
    }

    /**
     * Add values for GetCompetitivePricingForASINResult, return this.
     *
     * @param getCompetitivePricingForASINResult
     *             New values to add.
     *
     * @return This instance.
     */
    public function withGetCompetitivePricingForASINResult()
    {
        foreach (func_get_args() as $GetCompetitivePricingForASINResult) {
            $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'][] = $GetCompetitivePricingForASINResult;
        }
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

    /**
     * Construct GetCompetitivePricingForASINResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetCompetitivePricingForASINResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetCompetitivePricingForASINResponse']");
        if ($response->length == 1) {
            return new GetCompetitivePricingForASINResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetCompetitivePricingForASINResponse from provided XML.
                                  Make sure that GetCompetitivePricingForASINResponse is a root element");
        }
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<GetCompetitivePricingForASINResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetCompetitivePricingForASINResponse>";
        return $xml;
    }
}
