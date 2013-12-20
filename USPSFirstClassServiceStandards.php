<?php
/**
 * Load required classes
 */
require_once('USPSBase.php');

/**
 */
class USPSFirstClassServiceStandards extends USPSBase {
  /**
   * @var string - the api version used for this type of call
   */
  protected $apiVersion = 'FirstClassMail';
  /**
   * @var array - route added so far.
   */
  protected $route = array();
  /**
   * Perform the API call.
   * @return string
   */
  public function getServiceStandard() {
    return $this->doRequest();
  }
  /**
   * returns array of all routes added so far.
   * @return array
   */
  public function getPostFields() {
    return $this->route;
  }

  /**
   * Add route to the stack.
   * @param $origin_zip
   * @param $destination_zip
   */
  public function addRoute($origin_zip, $destination_zip) {
    $this->route = array(
      'OriginZip' => $origin_zip,
      'DestinationZip' => $destination_zip,
    );
  }
}



