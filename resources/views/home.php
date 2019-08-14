{% extends 'layouts/app.php' %}

{% block content %}
 <div class="container-fluid">
    
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="zmdi zmdi-pin-drop"></i> Recent Request</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Trip</th>
                        <th>Shipper's Name</th>
                        
                       
                        
                        <th>Pickup date</th>
                        <th>Total Amount</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                   
                    

                   

                   
                    
                </tbody>
                <tfoot>
                   <tr>
                        <th>S/N</th>
                        <th>Trip</th>
                        <th>Shipper Name</th>
                        
                       
                        
                        <th>Pickup date</th>
                        <th>Price</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->





      <!--End Dashboard Content-->

    </div>

{% endblock %}