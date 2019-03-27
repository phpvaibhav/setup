<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
 	public function __construct(){
        parent::__construct();

        $this->load->model('common_model');
    }
	public function signup()
	{
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]',
		array('is_unique' => 'Email already exist'));
		$this->form_validation->set_rules('fullName', 'fullName', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == FALSE){
            $response = array('status' =>'error', 'message' => strip_tags(validation_errors()));
           
        }else{
        	$profileImage ="";
        	if(!empty($_FILES['profileImage']['name'])):
        		$this->load->model('image_model');
        		$folder     = 'users';
        		$image =$this->image_model->upload_image('profileImage',$folder);
        		  if(array_key_exists("error",$image) && !empty($image['error'])){
                    $response = array('status' => 'error', 'message' => strip_tags($image['error']));
                   echo json_encode($response);die;
                }
                
                //check for image name if present
                if(array_key_exists("image_name",$image)):
                    $profileImage = $image['image_name'];
                endif;
        	endif;
        	$data_val= array();
        	$data_val['profileImage'] = $profileImage; 
        	$data_val['fullName'] = $this->input->post('fullName'); 
        	$data_val['email'] = $this->input->post('email'); 
        	$data_val['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        	$result = $this->common_model->insertData('users',$data_val);
        	if($result){
        		 $response = array('status' =>'success', 'message' =>" Add sucessfully");
        	}else{
        		 $response = array('status' =>'error', 'message' => "Something going wrong.");
        	}

        }
        echo json_encode($response);
	}//End FUnction
	public function signin()
	{
		$_POST = json_decode(file_get_contents('php://input'), true);

	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == FALSE){
            $response = array('status' =>'error', 'message' => strip_tags(validation_errors()));
           
        }else{
        	$data_val= array();
       
        	$data_val['email'] = $this->input->post('email'); 
        	$password = $this->input->post('password');
        	$user = $this->common_model->is_data_exists('users',$data_val);
        	if($user){
        		 if(password_verify($password, $user->password)){
				$session_data['id']         = $user->id ;
				$session_data['email']		= $user->email ;
				$session_data['isLogin'] 	= TRUE ;
				$this->session->set_userdata($session_data);
				$response = array('status' =>'success', 'message' =>"login sucessfully");
			}else{
				$response = array('status' =>'error', 'message' =>"Password not match");
			}
        		 
        	}else{
        		 $response = array('status' =>'error', 'message' => "Email address is not exist.");
        	}

        }
        echo json_encode($response);
	}
	public function session()
	{
		$data=array();
		$userid = $this->session->userdata('id');
		$user = $this->common_model->is_data_exists('users',array('id'=>$userid));
		if($user){
			$profileImage = "https://libertv.com/wp-content/uploads/2018/03/user-avatar-placeholder-1.png"; ;
			if(!empty($user->profileImage)):
				$profileImage = base_url().'uploads/users/thumb/'.$user->profileImage;
			endif;
			$data =array('id'=>$user->id,'fullName'=>$user->fullName,'email'=>$user->email,'profile'=>$profileImage);
		}else{
			$data =array();
		}
		  echo json_encode($data);
	}
	public function logout()
	{
		$data=array();
		$userid = $this->session->userdata('id');
		$this->session->sess_destroy();
		
		$response = array('status' =>'success', 'message' =>"logout sucessfully");
		  echo json_encode($response);
	}//end function
	public function categorysubmit()
	{
		
		$this->form_validation->set_rules('categoryName', 'category name', 'trim|required');
		if($this->form_validation->run() == FALSE){
            $response = array('status' =>'error', 'message' => strip_tags(validation_errors()));
           
        }else{
        	$categoryId 				= $this->input->post('categoryId');
        	$data_val['categoryName'] 	= $this->input->post('categoryName');
        	if(!empty($categoryId)){
        		$result = $this->common_model->updateFields('category',$data_val,array('categoryId'=>$categoryId));
        		$message = "Record update sunccessfully done.";
        	}else{
        		$result = $this->common_model->insertData('category',$data_val);
        		$message = "Record add sunccessfully done.";
        	}
        	
        	if($result){
        		 $response = array('status' =>1,'statusResponse' =>'success', 'message' =>$message);
        	}else{
        		 $response = array('status' =>0,'statusResponse' =>'error', 'message' => "Something going wrong.");
        	}

        }
        echo json_encode($response);
	}//End FUnction
    function categoryList(){
        $this->load->model('api_model');
       // $this->load->model('Api_model');
        $result = $this->api_model->categoryList();
        if(!empty($result)){
             $response = array('status' =>1,'statusResponse' =>'success', 'message' =>"record ok",'data'=>$result);
        }else{
             $response = array('status' =>0,'statusResponse' =>'error', 'message' =>"not found",'data'=>array());
        }
        echo json_encode($response);
    }//end function
}//end Class
