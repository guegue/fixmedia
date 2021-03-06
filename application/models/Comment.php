<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends ActiveRecord\Model {
	static $belongs_to = array(
    	array('report', 'class_name' => 'Reports_data'),
    	array('user'),
    	array('parent', 'class_name' => 'Comment', 'foreign_key'=>'parent')

	);
	static $has_many = array(array('children', 'class_name' => 'Comment', 'foreign_key'=>'parent'));
	static $after_create = array('write_activity');

   	public function write_activity() {
   		Activity::create(array(
   						'sender_id' => $this->user_id,
   						'receiver_id' => $this->report->user_id,
   						'notificable_id' => $this->id,
   						'notification_type' => 'COMMENT',
   						'read' => 0));
   	}
}