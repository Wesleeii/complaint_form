<!doctype html>
<html>
    <head>
        <title></title>
         <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../dist/css/bootstrapValidator.css"/>

    <script type="text/javascript" src="../vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../dist/js/bootstrapValidator.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    </head>
    <body>
        <div class="container">
            <br />
            <br />
            <br />
            <div class="table-responsive">
                <div id="live_data"></div>
            </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function(){
          function fetch_data()
        {
            
        }
        $('#add').click(function(){
            $('#imageModal').modal('show');
            $('#image_form')[0].reset();
            $('#modal-title').text("Add Image");
            $('#image_id').val('');
            $('#action').val('insert');
            $('#insert').val('insert');
            
        });
        $(document).on('click', '#btn_add', function(){
            
        })
            
        
    });
</script>