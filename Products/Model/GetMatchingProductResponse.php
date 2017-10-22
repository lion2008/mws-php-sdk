<?php

namespace Amazon\MWS\Products\Model;


/**
 * GetMatchingProductResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetMatchingProductResult: array</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class GetMatchingProductResponse extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetMatchingProductResult' => array('FieldValue' => array(), 'FieldType' => array('GetMatchingProductResult')),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetMatchingProductResult property.
     *
     * @return List<GetMatchingProductResult> GetMatchingProductResult.
     */
    public function getGetMatchingProductResult()
    {
        if ($this->_fields['GetMatchingProductResult']['FieldValue'] == null)
        {
            $this->_fields['GetMatchingProductResult']['FieldValue'] = array();
        }
        return $this->_fields['GetMatchingProductResult']['FieldValue'];
    }

    /**
     * Set the value of the GetMatchingProductResult property.
     *
     * @param array getMatchingProductResult
     * @return this instance
     */
    public function setGetMatchingProductResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['GetMatchingProductResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear GetMatchingProductResult.
     */
    public function unsetGetMatchingProductResult()
    {
        $this->_fields['GetMatchingProductResult']['FieldValue'] = array();
    }

    /**
     * Check to see if GetMatchingProductResult is set.
     *
     * @return true if GetMatchingProductResult is set.
     */
    public function isSetGetMatchingProductResult()
    {
                return !empty($this->_fields['GetMatchingProductResult']['FieldValue']);
            }

    /**
     * Add values for GetMatchingProductResult, return this.
     *
     * @param getMatchingProductResult
     *             New values to add.
     *
     * @return This instance.
     */
    public function withGetMatchingProductResult()
    {
        foreach (func_get_args() as $GetMatchingProductResult)
        {
            $this->_fields['GetMatchingProductResult']['FieldValue'][] = $GetMatchingProductResult;
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
     * Construct GetMatchingProductResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetMatchingProductResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetMatchingProductResponse']");
        if ($response->length == 1) {
            return new GetMatchingProductResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetMatchingProductResponse from provided XML.
                                  Make sure that GetMatchingProductResponse is a root element");
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
        $xml .= "<GetMatchingProductResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetMatchingProductResponse>";
        return $xml;
    }

}
