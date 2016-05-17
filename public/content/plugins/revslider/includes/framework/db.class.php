<?php
/* Provider:  - *
 * @author    ThemePunch <info@themepunch.com>
 * @link      http://www.themepunch.com/
 * @copyright 2015 ThemePunch
 */

if( !defined( 'ABSPATH') ) exit();

class RevSliderDB{
	
	private $lastRowID;
	
	/* Provider:  - *
	 * 
	 * constructor - set database object
	 */
	public function __construct(){
	}

	/* Provider:  - *
	 * 
	 * throw error
	 */
	private function throwError($message,$code=-1){
		RevSliderFunctions::throwError($message,$code);
	}
	
	//------------------------------------------------------------
	// validate for errors
	private function checkForErrors($prefix = ""){
		global $wpdb;
		
		if($wpdb->last_error !== ''){
			$query = $wpdb->last_query;
			$message = $wpdb->last_error;
			
			if($prefix) $message = $prefix.' - <b>'.$message.'</b>';
			if($query) $message .=  '<br>---<br> Query: ' . $query;
			
			$this->throwError($message);
		}
	}
	
	
	/* Provider:  - *
	 * 
	 * insert variables to some table
	 */
	public function insert($table,$arrItems){
		global $wpdb;
		
		$wpdb->insert($table, $arrItems);
		$this->checkForErrors("Insert query error");
		
		$this->lastRowID = $wpdb->insert_id;
		
		return($this->lastRowID);
	}
	
	/* Provider:  - *
	 * 
	 * get last insert id
	 */
	public function getLastInsertID(){
		global $wpdb;
		
		$this->lastRowID = $wpdb->insert_id;
		return($this->lastRowID);			
	}
	
	
	/* Provider:  - *
	 * 
	 * delete rows
	 */
	public function delete($table,$where){
		global $wpdb;
		
		RevSliderFunctions::validateNotEmpty($table,"table name");
		RevSliderFunctions::validateNotEmpty($where,"where");
		
		$query = "delete from $table where $where";
		
		$wpdb->query($query);
		
		$this->checkForErrors("Delete query error");
	}
	
	
	/* Provider:  - *
	 * 
	 * run some sql query
	 */
	public function runSql($query){
		global $wpdb;
		
		$wpdb->query($query);			
		$this->checkForErrors("Regular query error");
	}
	
	
	/* Provider:  - *
	 * 
	 * insert variables to some table
	 */
	public function update($table,$arrItems,$where){
		global $wpdb;
		
		$response = $wpdb->update($table, $arrItems, $where);
		
		return($wpdb->num_rows);
	}
	
	
	/* Provider:  - *
	 * 
	 * get data array from the database
	 * 
	 */
	public function fetch($tableName,$where="",$orderField="",$groupByField="",$sqlAddon=""){
		global $wpdb;
		
		$query = "select * from $tableName";
		if($where) $query .= " where $where";
		if($orderField) $query .= " order by $orderField";
		if($groupByField) $query .= " group by $groupByField";
		if($sqlAddon) $query .= " ".$sqlAddon;
		
		$response = $wpdb->get_results($query,ARRAY_A);
		
		$this->checkForErrors("fetch");
		
		return($response);
	}
	
	/* Provider:  - *
	 * 
	 * fetch only one item. if not found - throw error
	 */
	public function fetchSingle($tableName,$where="",$orderField="",$groupByField="",$sqlAddon=""){
		$response = $this->fetch($tableName, $where, $orderField, $groupByField, $sqlAddon);
		
		if(empty($response))
			$this->throwError("Record not found");
		$record = $response[0];
		return($record);
	}
	
	/* Provider:  - *
	 * 
	 * escape data to avoid sql errors and injections.
	 */
	public function escape($string){
		$string = esc_sql($string);
		return($string);
	}
	
}

/* Provider:  - *
 * old classname extends new one (old classnames will be obsolete soon)
 * @since: 5.0
 **/
class UniteDBRev extends RevSliderDB {}
?>