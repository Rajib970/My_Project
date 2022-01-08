<!DOCTYPE html>
<html lang="en">

<!-- header -->
@include('admin/includes/header')
<!-- End header -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/dataTable/jquery.dataTables.min.css')}}">
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
          <a class="nav-link collapsed" href="/admin" >
            <i class="fas fa-users"></i>
            <span> Leads </span>
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
                <div class="dropdown">
                  <button class="btn btn-none dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user text-info"></i> &nbsp; James Minto
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/admin-logout">Log out</a></li>
                  </ul>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800"> Leads </h1>            
            </div>
            <!-- Checking flash data to status changed or not  -->
            @if(session()->has('status'))
            <p class="text-success text-justify text-center h5" id="message"><i class="fas fa-exclamation-triangle text-success"></i> {{session()->get('status')}} </p>
            @endif

            <!-- Checking flash data to lead deleted or not  -->
            @if(session()->has('delete'))
            <p class="text-danger text-justify text-center h5" id="message"><i class="fas fa-exclamation-triangle text-danger"></i> {{session()->get('delete')}} </p>
            @endif
            <table id="table" class="display table table-hover">
              <thead>
                <tr>
                  <th> Name </th>
                  <th> Email </th>
                  <th> Phone </th>
                  <th> Date & Time </th>
                  <th> Message </th>
                  <th> Status </th>
                  <th> </th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
               @foreach( $data as $lead)
               <tr>
                <td> {{$lead->name}}</td>
                <td> {{$lead->email}}</td>
                <td> {{$lead->phone}}</td>
                <td> {{$lead->lead_at}}</td>
                <td> {{$lead->message}}</td>
                @if($lead->status ==  'NC'  )
                <td class="text-warning font-weight-bold"> Not Contacted </td>
                <td> <a href="/contact-lead/{{$lead->id}}" class="btn btn-sm btn-primary"> Contact </td>
                  @else
                  <td class="text-success font-weight-bold">  Contacted </td>
                  <td> <a class="btn btn-sm btn-info disabled "> Contacted </a> </td>
                  @endif
                  <td> <a href="/delete-lead/{{$lead->id}}" class="btn btn-sm btn-danger"> Delete  </a> </td>
                </tr>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <!-- footer -->
        @include('admin/includes/footer')
        <!-- End footer -->
        <script type="text/javascript" charset="utf8" src="{{URL::asset('public/js/jquery/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
         $(document).ready( function () {
          $('#table').DataTable();
        });

      </script>

    </body>

    </html>
