<?php

/**
 * QuizQuestionMapper class is extended class from TableAbstractMapper.
 * It contatins all read and write functions which are working with quiz_question table.
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 *
 */

namespace ngsadmin\dal\mappers {

  use ngsadmin\dal\dto\SkinProblemDto;
  use ngs\framework\dal\mappers\AbstractMapper;

  class SkinProblemMapper extends NgsAdminMapper {

    /**
     * @var table name in DB
     */
    private $tableName;
    private $sortBy = "asc";

    /**
     * @var an instance of this class
     */
    private static $instance = null;

    /**
     * Initializes DBMS pointers and table name private class member.
     */
    function __construct() {
      // Initialize the dbms pointer.
      parent::__construct();

      // Initialize table name.
      $this->tableName = "skin_problem";
    }

    /**
     * Returns an singleton instance of this class
     * @return
     */
    public static function getInstance() {
      if (self::$instance == null) {
        self::$instance = new SkinProblemMapper();
      }
      return self::$instance;
    }

    /**
     * @see AbstractMapper::createDto()
     */
    public function createDto() {
      return new SkinProblemDto();
    }

    /**
     * @see AbstractMapper::getPKFieldName()
     */
    public function getPKFieldName() {
      return "id";
    }

    /**
     * @see AbstractMapper::getTableName()
     */
    public function getTableName() {
      return $this->tableName;
    }

    public function updateDescription($id, $description) {
      $sqlQuery = sprintf("UPDATE `%s` SET `description`=:description WHERE `id`=:id", $this->getTableName());
      $res = $this->executeUpdate($sqlQuery, array('description' => $description, 'id' => $id));
      if ($res) {
        return true;
      }
      return false;
    }

    private $GET_SKIN_PROBLEMS = "SELECT * FROM `skin_problem` 
                                          ORDER BY %s %s LIMIT :offset, :limit";

    public function getSkinProblems() {
      if ($this->getOrderBy() == null) {
        $this->setOrderBy("id");
      }

      $sql = sprintf($this->GET_SKIN_PROBLEMS, "`skin_problem`.".$this->getOrderBy(), $this->getSortBy());

      $params = array("offset" => $this->getOffset(), "limit" => $this->getLimit());
      $dtos = $this->fetchRows($sql, $params);
      if (count($dtos) != 0) {

        return $dtos;
      }
      return null;
    }

    private static $SEARCH_SKIN_PROBLEM = "SELECT * FROM %s WHERE name LIKE '%s'";

    public function getMatchedArrayBySearchKey($searchKey) {
      $sql = sprintf(self::$SEARCH_SKIN_PROBLEM, $this->getTableName(), '%'.$searchKey.'%');
      $dtos = $this->fetchRows($sql);
      if (count($dtos) != 0) {
        return $dtos;
      }
      return null;
    }

    public function setSortBy($sortBy) {
      if (strtolower($sortBy) == "desc" || strtolower($sortBy) == "asc") {
        $this->sortBy = $sortBy;
      }
    }

    public function getSortBy() {
      return $this->sortBy;
    }

  }

}
