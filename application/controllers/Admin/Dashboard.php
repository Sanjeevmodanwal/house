<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Dashboard_model');
        if (isset($_SESSION['user'])) {
            
        } else {
            redirect('/', 'refresh');
        }
    }

    public function index() {
        $data['user'] = $this->db->count_all_results('users');
        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function category() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('categories');
        $category['category'] = $query->result_array();
        //  print_r($category); exit;
        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/add_category.php', $category);
        $this->load->view('templates/footer.php');
    }

    public function add_category() {
        $data = array(
            'category_name' => $this->input->post('name'),
            'discription' => $this->input->post('dis')
        );
        $this->db->insert('categories', $data);
        if ($this->db->affected_rows() > 0) {
            $lid = $insert_id = $this->db->insert_id();
            $res = array('status' => 200, 'msg' => 'Add record successfully!');
        } else {
            $res = array('status' => 500, 'msg' => 'record not saved !');
        }
        echo json_encode($res);
    }

    public function addPlan() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('categories');

        $this->db->order_by('id', 'DESC');
        $plans = $this->db->get('plan_detail');
        $record=[];
        foreach ($plans->result() as $row) {
            $record[] = array(
                'cate_name'=>$this->Dashboard_model->get_cate($row->category_id),
                'sqft' => $row->sqft,
                'floor' => $row->floor,
                'beds' => $row->beds,
                'bath' => $row->bath,
                'image'=>$this->Dashboard_model->get_single_img($row->id),
            );
        }
//        $this->db->select('*');
//        $this->db->from('categories');
//        $this->db->join('plan_detail', 'plan_detail.category_id = categories.id');
//        $this->db->join('images', 'images.plan_id = plan_detail.id');
        //$query2 = $this->db->get();
        $categories['category'] = $query->result_array();
        $categories['plans'] =  $record;
        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/add.php', $categories);
        $this->load->view('templates/footer.php');
    }

    public function add() {
        //echo 'me'; exit;

        $data = array(
            'category_id' => $this->input->post('category_id'),
            'sqft' => $this->input->post('sqft'),
            'floor' => $this->input->post('floor'),
            'beds' => $this->input->post('beds'),
            'bath' => $this->input->post('bath'),
        );
        $this->db->insert('plan_detail', $data);
        $pid = $this->db->insert_id();
        if ($this->db->affected_rows() > 0) {
            $this->load->helper(array('form', 'url'));
            $countfiles = count($_FILES['files']['name']);
            for ($i = 0; $i < $countfiles; $i++) {
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                $config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '5000'; // max_size in kb
                $config['file_name'] = $_FILES['files']['name'][$i];
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('file')) {
                    $img = array(
                        'plan_id' => $pid,
                        'image' => $_FILES['file']['name']
                    );
                    $this->db->insert('images', $img);
                } else {
                    $this->session->set_flashdata('item', $this->upload->display_errors());
                }
            }
        } else {
            $this->session->set_flashdata('item', 'Record is not saved !');
        }
        redirect('/Admin/dashboard/addPlan');
    }

    public function schedule() {
        $data['Location'] = $this->Dashboard_model->get_location();
        $data['class'] = $this->Dashboard_model->get_classes();
        $schedules = $this->Dashboard_model->get_schedule_data();
        // print_r($schedules); exit;
        foreach ($schedules as $sec) {
            $result[] = array(
                'id' => $sec['id'],
                'location_name' => $this->Dashboard_model->getl($sec['location_id']),
                'class_name' => $this->Dashboard_model->getc($sec['class_id']),
                'duration' => $sec['duration'],
                'day' => $sec['day'],
                'hour' => $sec['hour'],
                'min' => $sec['min'],
                'capacity' => $sec['capacity'],
                'avail' => $this->Dashboard_model->get_avail($sec['id'], $sec['capacity']),
                'status' => $sec['status']
            );
        }
        $data['schedules'] = $result;
        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/schedule.php', $data);
//       $this->load->view('Admin/dashboard/schedule.php',$data);
        $this->load->view('templates/footer.php');
    }

    public function add_schedule() {
        $data = array(
            'location_id' => $this->input->post('location'),
            'class_id' => $this->input->post('class'),
            'duration' => $this->input->post('duration'),
            'day' => $this->input->post('day'),
            'hour' => $this->input->post('hour'),
            'min' => $this->input->post('miniute'),
            'capacity' => $this->input->post('capacity'),
            'status' => $this->input->post('status')
        );
        $this->db->insert('schedule', $data);
        if ($this->db->affected_rows() > 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }
        $this->session->set_flashdata('item', 'Add Data Successfully !');
        redirect('/Admin/dashboard/schedule');
    }

    public function getuser() {
        $id = $this->input->post('id');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('schedule_id', 12);
        $this->db->join('enroll', 'enroll.user_id = users.id');
        $query = $this->db->get();
        echo json_encode($query->result_array());
    }

    public function enrolled() {
        // echo 'me'; exit;
        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/enrolled.php');
        $this->load->view('templates/footer.php');
    }

    public function view($id) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('schedule_id', $id);
        $this->db->join('enroll', 'enroll.user_id = users.id');
        $query = $this->db->get();
        $data['users'] = $query->result_array();
        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/enrolled.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function update_category() {
        $id = $this->input->post('id');
        $data = array(
            'category_name' => $this->input->post('canme'),
            'discription' => $this->input->post('dis')
        );
        $this->db->where('id', $id);
        $this->db->update('categories', $data);
        if ($this->db->affected_rows() > 0) {
            $res = array('status' => 200, 'msg' => 'Update Address Succesfully !');
        } else {
            $res = array('status' => 200, 'msg' => 'Update Address Succesfully');
        }
        echo json_encode($res);
    }

    public function update_class() {
        $id = $this->input->post('id');
        $data = array(
            'class_name' => $this->input->post('cname'),
        );
        $this->db->where('id', $id);
        $this->db->update('class', $data);
        if ($this->db->affected_rows() > 0) {
            $res = array('status' => 200, 'msg' => 'Update Class Succesfully !');
        } else {
            $res = array('status' => 200, 'msg' => 'Update Class Succesfully');
        }
        echo json_encode($res);
    }

    public function delete_location() {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('location');
        if ($this->db->affected_rows() > 0) {
            $res = array('status' => 200, 'msg' => 'Record Deleted');
        } else {
            $res = array('status' => 200, 'msg' => 'Something Wrong !');
        }
        echo json_encode($res);
    }

    public function delete_class() {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('class');
        if ($this->db->affected_rows() > 0) {
            $res = array('status' => 200, 'msg' => 'Record Deleted');
        } else {
            $res = array('status' => 200, 'msg' => 'Something Wrong !');
        }
        echo json_encode($res);
    }

    public function delete_schedule() {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('schedule');
        if ($this->db->affected_rows() > 0) {
            $res = array('status' => 200, 'msg' => 'Record Deleted');
        } else {
            $res = array('status' => 200, 'msg' => 'Something Wrong !');
        }
        echo json_encode($res);
    }

    public function edit($id) {
        $data['Location'] = $this->Dashboard_model->get_location();
        $data['class'] = $this->Dashboard_model->get_classes();
        $this->db->where('id', $id);
        $query = $this->db->get('schedule')->row();
        $result = array(
            'id' => $query->id,
            'location_name' => $this->Dashboard_model->getl($query->location_id),
            'class_name' => $this->Dashboard_model->getc($query->class_id),
            'duration' => $query->duration,
            'day' => $query->day,
            'hour' => $query->hour,
            'min' => $query->min,
            'capacity' => $query->capacity,
            'status' => $query->status
        );
        $data['schedule'] = $result;

        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/edit.php', $data);
//       $this->load->view('Admin/dashboard/schedule.php',$data);
        $this->load->view('templates/footer.php');
    }

    public function update_schedule() {
        $id = $this->input->post('id');
        $data = array(
            'location_id' => $this->input->post('location'),
            'class_id' => $this->input->post('class'),
            'duration' => $this->input->post('duration'),
            'day' => $this->input->post('day'),
            'hour' => $this->input->post('hour'),
            'min' => $this->input->post('miniute'),
            'capacity' => $this->input->post('capacity'),
            'status' => $this->input->post('status')
        );
        $this->db->where('id', $id);
        $this->db->update('schedule', $data);
        if ($this->db->affected_rows() > 0) {
            redirect('/Admin/dashboard/schedule');
        } else {
            $res = array('status' => 200, 'msg' => 'Update Address Succesfully');
        }
        echo json_encode($res);
    }

    public function test() {
        $query = $this->db->get('schedule');
        foreach ($query->result_array() as $row) {
            $data[] = array(
                'id' => $row['id'],
                'location' => $this->Dashboard_model->getl($row['location_id']),
                'class' => $this->Dashboard_model->getc($row['class_id']),
                'duration' => $row['duration'],
                'day' => $row['day'],
                'hour' => $row['hour'],
                'min' => $row['min'],
                'capacity' => $row['capacity'],
                'status' => $row['status'],
                'enroll' => $this->Dashboard_model->enroll($row['id']),
            );
        }
        print_r($data);
        exit;
    }

}

?>
