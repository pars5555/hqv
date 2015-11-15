<?php
/**
 *
 * User object for non authorized users.
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2009-2014
 * @package security.users
 * @version 6.0
 *
 */
namespace ngsadmin\security\users {

  abstract class AbstractAdminUser extends \ngs\framework\security\users\NgsUser {

    /**
     * Constructs GUEST user object
     */
    public function __construct() {
      parent::__construct();
    }

    /**
     * Set unique identifier
     *
     * @param object $uniqueId
     * @return
     */
    protected function setUniqueId($uniqueId) {
      $this->setCookieParam("buh", $uniqueId);
    }

    /**
     * Set permanent identifier
     *
     * @param object $id
     * @return
     */
    protected function setId($id) {
      $this->setCookieParam("bud", $id);
    }

    /**
     * Returns unique identifier
     *
     * @return
     */
    protected function getUniqueId() {
      return $this->getCookieParam("buh");
    }

    /**
     * Returns permanent identifier
     *
     * @return
     */
    protected function getId() {
      return $this->getCookieParam("bud");
    }

  }

}
