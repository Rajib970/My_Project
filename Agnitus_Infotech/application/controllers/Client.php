<?php
 class Client extends CI_Controller{
   public function index(){
     if($this->session->userdata('client')){
       $id=$this->session->userdata('client');
       $data=$this->db->query('SELECT * FROM client WHERE id='."'$id'" )->row();
       $products=$this->db->query('SELECT * FROM products')->result();
       $status=$this->db->query('SELECT product_id FROM buy_status WHERE client_id='."'$id'")->result();
       if(!empty($status)){
       $this->load->view('client/dashboard',["name"=>$data->name,"wallet"=>$data->wallet,"products"=>$products,"prdt_id"=>$status]);
     }
     else{
       $this->load->view('client/dashboard',["name"=>$data->name,"wallet"=>$data->wallet,"products"=>$products,"prdt_id"=>'']);
     }
   }
     else{
       $this->load->view('client/clientLogin');
     }
   }

   public function login(){
     $this->form_validation->set_rules('username','Username','required|valid_email');
      $this->form_validation->set_rules('password','Password','required|alpha_numeric|max_length[8]');
      if($this->form_validation->run()==false){
        $this->load->view('client/clientLogin');
      }
      else{
        $user=$this->input->post('username');
        $password=$this->input->post('password');
        $data=$this->db->query('SELECT * FROM client WHERE email='."'$user'".' AND password='."$password" )->row();
        if(empty($data)){
          $this->session->set_flashdata('loginError','email or Password is incorrect');
          return $this->load->view('client/clientLogin');
        }
        $this->session->set_userdata('client',$data->id);
        $products=$this->db->query("SELECT * FROM products")->result();
        $status=$this->db->query('SELECT product_id FROM buy_status WHERE client_id='."'$data->id'")->result();
        if(!empty($status)){
        $this->load->view('client/dashboard',["name"=>$data->name,"wallet"=>$data->wallet,"products"=>$products,"prdt_id"=>$status]);
      }
      else{
        $this->load->view('client/dashboard',["name"=>$data->name,"wallet"=>$data->wallet,"products"=>$products,"prdt_id"=>'']);
      }
   }
 }

   public function signUp(){
    $this->form_validation->set_rules('name','Name','required|regex_match[/^([a-z ])+$/i]');
      $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('phone','Phone No.','required|numeric');
          $this->form_validation->set_rules('country','Country','required|alpha');
            $this->form_validation->set_rules('password','Password','required|alpha_numeric');
            if($this->form_validation->run()==false){
              $this->load->view('client/signUp');
            }
            else{
              $name=$this->input->post('name');
              $email=$this->input->post('email');
              $phone=$this->input->post('phone');
              $country=$this->input->post('country');
              $password=$this->input->post('password');
              $check=$this->db->query('SELECT id FROM client WHERE email='."'$email'")->row();
              if(!empty($check->id)){
                $this->session->set_flashdata('email','This email is already exists please Login');
                return $this->load->view('client/signUp');
              }
              else{
              $array=[
                      'name'=>$name,
                      'email'=>$email,
                      'phone'=>$phone,
                      'country'=>$country,
                      'password'=>$password,
                      'wallet'=>0
               ];
              $sql=$this->db->insert('client',$array);
              if($this->db->insert_id()){
                $id=$this->db->insert_id();
                $this->session->set_userdata('client',  $id);
                $products=$this->db->query('SELECT * FROM products')->result();
                $client=$this->db->query('SELECT wallet FROM client WHERE id='."'$id'")->row();
                $this->load->view('client/dashboard',['products'=>$products,'wallet'=>$client->wallet,'prdt_id'=>'']);
              }
              else{
                $this->load->view('client/signUp');
              }
            }
            }
          }


   public function buy(){
     $client_id=$this->input->post('clientId');
     $product_id=$this->input->post('productId');
     $client=$this->db->query('SELECT wallet FROM client WHERE id='."'$client_id'")->row();
     $product=$this->db->query('SELECT price FROM products WHERE id='."'$product_id'")->row();
     if($client->wallet >= $product->price){
       $array=[
              'client_id'=>$client_id,
              'product_id'=>$product_id
       ];
       $sql=$this->db->insert('buy_status',$array);
       $amount=$client->wallet - $product->price;
       $query=$this->db->query('UPDATE client SET wallet='."'$amount'".'WHERE id='."'$client_id'");
       $this->session->set_flashdata('buy','Product Purchased Successfully');
       return redirect('Client/index');
     }
     else{
       $this->session->set_flashdata('insufbalance','You have Insufficiant balance to buy the product.');
       return redirect('Client/index');
     }
   }

   public function logout(){
     $this->session->sess_destroy();
     return redirect('Client/index');
   }

 }
 ?>
