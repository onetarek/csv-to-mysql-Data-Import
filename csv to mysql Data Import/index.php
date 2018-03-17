 <?php
 
    #NAME : Md. Kamrujjaman
    #E-Mail : Kamrujjamantogor@gmail.com
    #PHONE : +88 01728 38 98 57
    
    include ("import_excel.php");

?>
       <!DOCTYPE html>
       <html>
       <head>
    <title>Mysql Database Import From CSV</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

       </head>
       <body>
             <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title"></div><div class="panel-title"></div>
                    </div>

                    <h1>Mysql data import from Excel File</h1>

                    <div id="wrap">
        <div class="container">
            <div class="row">
 
                <form class="form-horizontal" action="import_excel.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
 
                        <!-- Form Name -->
                        <legend>Form Name</legend>
 
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
 
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import Data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
 
                    </fieldset>
                </form>
 
            </div>
            <?php
             get_all_records();
            ?>
        </div>

         <div>
            <form class="form-horizontal" action="import_excel.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                            </div>
                   </div>                    
            </form>           
 </div>
    </div>
        
        <br />
        
        
                </div>
       </body>
       </html>         

               
