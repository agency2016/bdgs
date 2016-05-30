<?php
class Bdgs_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     *
     * @param type $data
     * @return boolean
     */
    public function insert($table_name, $data)
    {
        if ($this->db->insert($table_name, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function update($table_name, $data = array(), $options = array())
    {

        return $this->db->update($table_name, $data, $options);
    }

    /**
     *
     * @param type $user_id
     * @return type
     */
    public function delete($table_name, $options = array())
    {
        return $this->db->delete($table_name, $options);
    }

    /**
     * @param $table_name
     * @return mixed
     */
    public function get_total_row($table_name)
    {
        return $this->db->count_all($table_name);
    }

    /**
     *
     * @param type $name
     * @return boolean
     */
    public function get_by($table_name, $options)
    {
        $query = $this->db->get_where($table_name, $options);
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function get_all($table_name, $limit = '', $start = '0', $order_by = '', $order_type = 'asc')
    {

        if ($order_by != '') {
            $this->db->order_by($order_by, $order_type);
        }
        if ($limit != '') {
            $query = $this->db->get($table_name, $limit, $start);
        } else {
            $query = $this->db->get($table_name);
        }

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function get_all_by_option($table_name, $limit = 8, $start = '0', $order_by = 'create_date', $order_type = 'asc', $options)
    {

        if ($order_by != '') {
            $this->db->order_by($order_by, $order_type);
        }
        if ($limit != '') {
            $query = $this->db->get_where($table_name, $options, $limit, $start);
        } else {
            $query = $this->db->get_where($table_name, $options);
        }


        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

//common function end
     public function get_featured_event()
    {
        $this->db->select('*');
        $this->db->from('focus_event');
        $this->db->join('focus_event_image', 'focus_event.focus_event_id = focus_event_image.focus_event_id');
        $this->db->order_by('focus_event.focus_event_id', 'desc');
         $this->db->where('focus_event_image.cover_image', 1);


        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
      public function get_latest_next_event()
    {
        $this->db->select('*');
        $this->db->from('next_event');
        $this->db->order_by('next_event_id', 'desc');
        $this->db->limit(6);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
      public function get_latest_event()
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->join('event_image', 'event.event_id = event_image.event_id');
        //$this->db->join('event_video', 'event.event_id = event_video.event_id');
        $this->db->where('event_image.cover_image', 1);
        $this->db->order_by('event.event_id', 'desc');
        $this->db->limit(3);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
    
    
      public function get_all_events_front($number=7,$page=0)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->join('event_image', 'event.event_id = event_image.event_id');
        
        $this->db->where('event_image.cover_image', 1);
        $this->db->order_by('event.event_id', 'desc');
        $this->db->limit($number,$page);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
    
      public function get_all_focus_events_front($number=5,$page=0)
    {
        $this->db->select('*');
        $this->db->from('focus_event');
        $this->db->join('focus_event_image', 'focus_event.focus_event_id = focus_event_image.focus_event_id');
        $this->db->order_by('focus_event.focus_event_id', 'desc');
        $this->db->where('focus_event_image.cover_image', 1);
        $this->db->limit($number,$page);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
      public function get_next_event_front($number=15,$page=0)
    {
        $this->db->select('*');
        $this->db->from('next_event');
        $this->db->order_by('next_event_id', 'desc');
        $this->db->limit($number,$page);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
}
