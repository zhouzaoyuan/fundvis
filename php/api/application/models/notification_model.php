<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Notifications
*
 * @author ngyikwai
 */
class Notification_model extends CI_Model{

    var $KEY_stock_id = 'sid';
    var $KEY_user_id = 'uid';
    var $KEY_notification_id = 'id';
    var $KEY_msg = 'msg';
    var $KEY_type = 'type';
    var $KEY_val_at_notify = 'val_at_notify';
    var $Table_name_notification = 'NotificationHistory';


    function __construct() {
        parent::__construct();
    }
    
   
    //====================================================//
   public function get_notification($uid,$sid,$type)
   {
        $this->db->where($this->KEY_stock_id,$sid);
        $this->db->where($this->KEY_user_id,$uid);
        $this->db->where($this->KEY_type,$type);
        
        $q=$this->db->get($this->Table_name_price);
        if( $q->num_rows() >0){
            return $q->result_array()[0];
        } else{
            return null;
        }


   }




}

/* end of file notification_model.php */