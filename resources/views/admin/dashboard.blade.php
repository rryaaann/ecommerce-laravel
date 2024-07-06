<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin Dashboard - Seller Center</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <style>
        body {
          font-family: Arial, sans-serif;
        }
    
        .sidebar {
          height: 100vh;
          width: 250px;
          position: fixed;
          top: 0;
          left: 0;
          background-color: #343a40;
          color: #fff;
          padding-top: 20px;
        }
    
        .sidebar a {
          padding: 15px;
          text-decoration: none;
          font-size: 18px;
          color: #fff;
          display: block;
        }
    
        .sidebar a:hover {
          background-color: #575d63;
        }
    
        .sidebar .active {
          background-color: #007bff;
        }
    
        .sidebar .sidebar-header {
          padding: 20px;
          text-align: center;
          font-size: 24px;
          font-weight: bold;
        }
    
        .content {
          margin-left: 250px;
          padding: 20px;
        }
    
        .card {
          margin-bottom: 20px;
        }
    
        .navbar {
          margin-left: 250px;
          background-color: #f8f9fa;
          border-bottom: 1px solid #dee2e6;
        }
    
        .navbar .navbar-nav .nav-link {
          color: #343a40;
        }
    
        .navbar .navbar-nav .nav-link:hover {
          color: #007bff;
        }
      </style>
    </head>
    
    <body>
      <div class="sidebar">
        <div class="sidebar-header">Admin Dashboard</div>
        <a class="active" href="#dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#orders"><i class="fas fa-box"></i> Orders</a>
        <a href="#products"><i class="fas fa-tags"></i> Products</a>
        <a href="#customers"><i class="fas fa-users"></i> Customers</a>
        <a href="#reports"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="#settings"><i class="fas fa-cog"></i> Settings</a>
      </div>
    
      <div class="content">
        
    
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="card bg-primary text-white">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h5>Orders</h5>
                      <h3>150</h3>
                    </div>
                    <div>
                      <i class="fas fa-box fa-3x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h5>Products</h5>
                      <h3>500</h3>
                    </div>
                    <div>
                      <i class="fas fa-tags fa-3x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6">
              <div class="card bg-warning text-white">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h5>Customers</h5>
                      <h3>1200</h3>
                    </div>
                    <div>
                      <i class="fas fa-users fa-3x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h5>Reports</h5>
                      <h3>75</h3>
                    </div>
                    <div>
                      <i class="fas fa-chart-line fa-3x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Additional content can go here -->
    
        </div>
      </div>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    
    </html>
    </x-app-layout>
    