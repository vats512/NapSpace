<script type="text/javascript" src="js/add_pg.js"></script>
<?php
        $id= $this->session->userdata('owner_id');
        #echo $id;
?>
<div id="add_pg_form">
    <form action="submit_pg" method="POST">
        <div class="pg_info_div col-sm-offset-2 col-sm-8">
            <div class="div_data col-sm-12">
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="landmark">Landmark:</label>
                    <input type="Landmark" class="form-control" id="landmark" name="landmark">
                </div>
                <div class="form-group">
                    <label for="contact number">Contact:</label>
                    <input type="number" class="form-control" id="contact" name="contact">
                    <input type="hidden" class="form-control" id="owner_id" name="owner_id" value=<?=$id ?>>
                </div>                
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="div_data"col-sm-12>
                <input type="submit" value="Add PG Request" id="submit" class="btn btn-success"/> 
        </div>
    </form>
</div>