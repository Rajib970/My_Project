<!DOCTYPE html>
<html lang="en">

<!-- header -->
@include('admin/includes/header')
<!-- End header -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/jquery.dataTables.min.css')}}">
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3"> Admin Pannel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/Projects/ozstrong/admin"  aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span> Leads </span>
          </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/Projects/ozstrong/subscribers" data-toggle="collapse" aria-expanded="true">
            <i class="fas fa-fw fa-wrench"></i>
            <span> Subscribers </span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <p class="text-info h2 mx-2"> Admin  Dashboard </p> 
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">James Minto</span>
                  <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               <!--  <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a> -->
              <!--   <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a> -->
               <!--  <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="/Projects/ozstrong/admin-logout" data-toggle="" data-target="">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Subscribers </h1>
          </div>
          <!-- Checking flash data to subscription approved or not  -->
          @if(session()->has('approved'))
          <p class="text-success text-justify text-center h5" id="message"><i class="fas fa-exclamation-triangle text-success"></i> {{session()->get('approved')}} </p>
          @endif

          <!-- Checking flash data to subscription cancelled or not  -->
          @if(session()->has('cancel'))
          <p class="text-danger text-justify text-center h5" id="message"><i class="fas fa-exclamation-triangle text-danger"></i> {{session()->get('cancel')}} </p>
          @endif

          <!-- Checking flash data to subscriber deleted or not  -->
          @if(session()->has('delete-subscriber'))
          <p class="text-danger text-justify text-center h5" id="message"><i class="fas fa-exclamation-triangle text-danger"></i> {{session()->get('delete-subscriber')}} </p>
          @endif
          <table id="table_id" class="display">
            <thead>
              <tr>
                <th> Name </th>
                <th> Email </th>
                <th> Date & Time </th>
                <th> Status</th>
                <th> </th>
                    <th> </th>
              </tr>
            </thead>
            <tbody>
             @foreach( $data as $lead)
             <tr>
              <td> {{$lead->name}}</td>
              <td> {{$lead->email}}</td>
              <td> {{$lead->at}}</td>
              @if($lead->status == 'P')
              <td class="text-warning font-weight-bold"> Pending </td>
              <td> <a href="/Projects/ozstrong/approve-subscription/{{$lead->id}}" class="btn btn-sm btn-primary "> Approve Subscription </td>
                @elseif($lead->status == 'C')
                <td class="text-danger font-weight-bold">  Subscription Cancelled </td>
                <td> <a href="/approve-subscription/{{$lead->id}}" class="btn btn-sm btn-info"> Approve Subscription </td>
                  @else 
                  <td class="text-success font-weight-bold"> Subscribed </td>
                  <td> <a href="/Projects/ozstrong/cancel-subscription/{{$lead->id}}" class="btn btn-danger btn-sm"> Cancel Subscription</a> </td>
                  @endif
                  
                  <td> <a href="/Projects/ozstrong/delete-subscriber/{{$lead->id}}" class="btn btn-sm btn-danger"> Delete  </a> </td>
                </tr>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <!-- footer -->
        @include('admin/includes/footer')
        <!-- End footer -->
        <script type="text/javascript" charset="utf8" src="{{URL::asset('public/js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
         $(document).ready( function () {
          $('#table_id').DataTable();
        } );
      </script>

    </body>

    </html>
