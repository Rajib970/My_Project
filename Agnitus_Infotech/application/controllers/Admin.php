<?php
 class Admin extends CI_Controller{
   public function index(){
     if($this->session->has_userdata('admin')){
       $id=$this->session->userdata('admin');
       $data=$this->db->query('SELECT * FROM admin WHERE id='."'$id'" )->row();
       $products=$this->db->query('SELECT * FROM products')->result();
       $this->load->view('admin/dashboard',["name"=>$data->name,"products"=>$products]);
     }
     else{
     $this->load->view('admin/adminLogin');
     }
   }

   public function login(){
     $this->form_validation->set_rules('username','Username','required|valid_email');
      $this->form_validation->set_rules('password','Password','required|alpha_numeric|max_length[8]');
      if($this->form_validation->run()==false){
        $this->load->view('admin/adminLogin');
      }
      else{
        $user=$this->input->post('username');
        $password=$this->input->post('password');
        $data=$this->db->query('SELECT * FROM admin WHERE email='."'$user'".' AND password='."$password" )->row();
        if(empty($data)){
          $this->session->set_flashdata('loginError',' email or Password is incorrect');
          $this->load->view('admin/adminLogin');
        }
        $this->session->set_userdata('admin',$data->id);
        $products=$this->db->query("SELECT * FROM products")->result();
        $this->load->view('admin/dashboard',["name"=>$data->name,"products"=>$products]);
      }
   }

  public function page($x){
    if($x=='p'){
      $this->load->view('admin/addProduct');
    }
    else{
      $this->load->view('admin/addBalance',["id"=>$x]);
    }
  }

  public function addProduct(){
    if($this->session->userdata('admin')){
   $this->form_validation->set_rules('name','Product Name','required|regex_match[/^([a-z ])+$/i]');
   $this->form_validation->set_rules('price','price','required|numeric');
   $this->form_validation->set_rules('stock','Stock','required|numeric');
   $this->form_validation->set_rules('brand','brand name','required|alpha');
   if($this->form_validation->run()==false){
     $this->load->view('admin/addProduct');
   }
   else{
     $name=$this->input->post('name');
     $price=$this->input->post('price');
     $stock=$this->input->post('stock');
     $brand=$this->input->post('brand');
     $sql=[
       'name'=>$name,
       'price'=>$price,
       'stock'=>$stock,
       'brand'=>$brand
     ];
     $result=$this->db->insert('products',$sql);
     if($result){
       $this->session->set_flashdata('success','Product Inserted Successfully');
       $this->load->view('admin/addProduct');
     }
   }
  }
  else{
    return redirect('Admin/index');
  }
}

 public function clientList(){
   if($this->session->userdata('admin')){
   $clients=$this->db->query('SELECT * FROM client')->result();
    $this->load->view('admin/clientList',["clients"=>$clients]);
 }
 else{
   return redirect('Admin/index');
 }
}

 public function addBalance(){
   $this->form_validation->set_rules('balance','Wallet Balance','required|numeric');
   if($this->form_validation->run()==false){
     $this->load->view('admin/addBalance',["id"=>$this->input->post('id')]);
   }
   $id=$this->input->post('id');
   $balance=$this->input->post('balance');
   $amount=$this->db->query('SELECT wallet FROM client WHERE id='."'$id'")->row();
   $balance=$balance+$amount->wallet;
   $query=$this->db->query('UPDATE client SET wallet='."'$balance'".'WHERE id='."'$id'");
   if($query){
     $this->session->set_flashdata('msg','Balance Added Successfully');
     return redirect('Admin/clientList');
   }
 }

 public function logout(){
   $this->session->sess_destroy();
   return redirect('Admin/index');
 }


 }
?>
