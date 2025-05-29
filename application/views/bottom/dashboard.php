  
  

 
    <script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/daterangepicker/moment.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepickern.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/datatables/dataTables.responsive.js';?>"></script>


<script type="text/javascript">	
 $(document).ready(function() {
        $('#dataTables1').DataTable({
                responsive: true,
          "bLengthChange": false,
          "bInfo": false,
          "bFilter": false,
          "order": [[ 0, "desc" ]],
          "bPaginate": false 
         
               }); 
}); 

		
</script>