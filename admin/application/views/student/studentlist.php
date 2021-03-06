<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-body"><!-- Basic Tables start -->
  
<!-- Table head options start -->
<div class="row">
    <div class="col-xs-12">
    <?php if(($this->session->flashdata('success'))){ ?>
        <div class="alert alert-success" id="successMessage">
        <strong> <?php echo $this->session->flashdata('success'); ?></strong> 
        </div>
    <?php } ?>
    
        <div class="card">
    
            <div class="card-header">
                <h4 class="card-title">List of Student
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
              
                </h4>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table id="example" class="table">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Sr No</th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Assessment</th>
							<th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
						<tbody>
                        <?php
                                $i=1;
                                if($result){                             
                                foreach($result as $row)
                                {
                            ?>
                            <tr>
                            
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->username; ?></td>
                                      <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->phone; ?></td>
                                  
                                    <td>
                                        <?php if($row->assessment=="student"){ ?>
                                        <?php echo  "<span class='label label-primary'> $row->assessment</span>"?>
                                        <?php }else{ ?>
                                        <span class="label label-warning"><?php echo $row->assessment; ?></span>
                                        <?php 
                                        } ?>

                                        </td>
                                    <td>
                                        <?php if($row->status=="Active"){ ?>
                                        <?php echo  "<span class='label label-success'> $row->status</span>"?>
                                        <?php }else{?>
                                        <span class="label label-danger"><?php echo $row->status; ?></span>
                                        <?php 
                                        } ?>
                                    </td>
                                  
                                    <td>
                                        <?php echo anchor('student/edit_student/'.$row->user_id,'<i class="ficon icon-pencil2"></i>'); ?>
                                        <a href="javascript:void(0)"  onclick="deletedata('<?php echo $row->user_id; ?>')" ><i class="ficon icon-bin"></i></a>    
                                    </td>  
                                </tr>      
                                <?php
                                $i++;
                                    } }
                                ?>           
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table head options end -->



        </div>
      </div>
    </div>
<!---start Delete menu--->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document" style="margin:20% auto;">
        <div class="modal-content">
            <div class="modal-body" >
              	<p>Are you sure you want to delete this record?</p>
              </div>
              <div class="modal-footer text-center">
              	<!--<button type="button" class="next_btn" id="yes_btn" name="update">Yes</button>-->
				<center><button type="button" class="btn-md btn-icon btn-link p4" id="yes_btn" ><a href="" id="deleteYes" value="Yes"  class="btn btn-success">Yes</a></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button></center>
            </div>
        </div>
    </div>
</div>
<!---End Delete menu--->
<?php 
$this->load->view('common/footer');
?>

<script>
$(function() { 
    setTimeout(function() {
  $('#successMessage').fadeOut('fast');
}, 3000);
   
});


function deletedata(id){  
    $('#myModal').modal('show')
   
        $('#yes_btn').click(function(){
           
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"/Program/deletedata/",
                type: "post",
                data: {id:id} ,
                success: function (response) {             
                document.location.href = url+'Program/Programlist/';                  

            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

        });
    
   

}
</script>

