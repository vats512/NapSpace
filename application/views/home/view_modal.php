<style type="text/css">
    body
    {
        
    }
    #pg_full
    {
    }
    .carousel img
    {
        min-width: 100%;
        max-width: none;
    }
    .pg_header
    {
        min-height: 90px;
        padding: 20px 0px;
        background: #fff;
    }
    .pg_name
    {
        font-size: 30px;
    }
    .link_logo
    {
        font-size: 20px;
    }
    .avail_for
    {
        font-size: 18px;
        color: gray;
    }
    .landmark_div
    {
        margin-top: 10px;
    }
    .pg_data_div
    {
        background: #fff;
        font-size: 22px;
    }
    .room_div
    {
        padding: 10px 0px;
    }
    .highlight_div
    {
        background: #fff;
        margin: 10px 15px;
        padding: 0px;
        font-size: 22px;
    }
    .highlight_div .head_div
    {
        font-size: 26px;
        color: #335b6b;
    }
    .highlight_div .data_div
    {
        padding: 10px 5px;
        border-top: 1px solid #ccc;
    }
    .amenities_val, .rules_val
    {
        font-size: 17px;
        color: #132644;
    }
    .sharing_tab
    {
        font-size: 17px;
    }
    .room_info_div
    {
        min-height: 120px;
    }
    .button_div
    {
        padding: 10px 10px;
    }
</style>
<div class="pull-right" style="margin-top: 10px;">
    <span id="close_button">
        <span class="glyphicon glyphicon-remove pointer"></span>
    </span>
</div>
<div class="container-fluid lr0pad" id="pg_full">
    <div class="col-sm-12 pg_header lr0pad">
        <div class="col-sm-12 text-center">
            <div class="col-sm-12">
                <a href="home/view_pg/<?= $pg['name'];?>_<?= $pg['id'];?>" target="_blank">
                    <span class="pg_name">
                        <?= $pg['name'];?>
                    </span> 
                    <span class="glyphicon glyphicon-share link_logo"></span>
                </a>
                <br/>
                <span class="avail_for">
                     Available for <?= $pg['gender'];?>
                </span>    
            </div>
            <div class="col-sm-12 landmark_div">
                <span class="h4">
                    Landmark: <?= $pg['area'];?> 
                </span>    
            </div>
        </div>
    </div>
    <div class="clearfix"></div><br/>
    <div class="col-sm-12 pg_body">
        <div class="col-sm-12 color-sm-offset-1 pg_data_div">
            <div class="col-sm-12 carousel_div">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <?php for ($i=1; $i < count($images); $i++):?> 
                            <li data-target="#myCarousel" data-slide-to="<?= $i;?>"></li>
                        <?php endfor;?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?= $this->config->item('img_url');?><?= $images[0];?>" alt="PG Image" style="height: 200px">
                        </div>
                        <?php for ($i=1; $i < count($images); $i++):?>
                            <div class="item">
                                <img src="<?= $this->config->item('img_url');?><?= $images[$i];?>" alt="PG Image" style="height: 200px">
                            </div>
                        <?php endfor;?>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12 room_div lr0pad">
                    <div class="col-sm-12 lr0pad">
                        <?php
                            $no = count($rooms);
                            $no = floor(12/$no);
                            $i = 1;
                        ?>
                        <ul  class="nav nav-tabs col-sm-12">
                            <?php foreach ($rooms as $key => $value):?>
                                <li class="sharing_tab col-sm-<?= $no;?> lr0pad text-center <?php if($i == 1):?> active <?php endif;?>">
                                    <a  href="#<?= $key;?>_sharing" data-toggle="tab">
                                        <?= $key;?> Sharing
                                    </a>
                                </li>
                                <?php $i++;?>
                            <?php endforeach;?>
                        </ul>
                        <?php $i = 1;?>
                        <div class="tab-content clearfix col-sm-12 lr0pad room_info_div">
                            <?php foreach ($rooms as $key => $value):?>
                                <div class="tab-pane <?php if($i == 1):?> active <?php endif;?>" id="<?= $key;?>_sharing">
                                    <?php if(isset($value['ac'])):?>
                                        <h4>
                                            AC Room : Rs. <?= $value['ac'];?>
                                        </h4>
                                    <?php endif;?>
                                    <?php if(isset($value['normal'])):?>
                                        <h4>
                                            Normal Room : Rs. <?= $value['normal'];?>
                                        </h4>
                                    <?php endif;?>
                                </div>
                                <?php $i++;?>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-12">
            <div class="col-sm-12 pg_amenities highlight_div">
                <div class="amenities_head head_div">
                    Amenities
                </div>
                <div class="clearfix"></div>
                <div class="amenities_data data_div col-sm-12">
                    <?php foreach($amenities as $key => $value):?>
                        <div class="col-sm-6 amenities_val" style="margin-top: 10px">
                            <span><?= $value['icon'];?></span>
                            <span><?= $value['name'];?></span>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-12 pg_rules highlight_div">
                <div class="rules_head head_div">
                    Rules
                </div>
                <div class="clearfix"></div>
                <div class="rules_data data_div col-sm-12">
                    <?php foreach($rules as $key => $value):?>
                        <div class="col-sm-12 rules_val">
                            <span class="glyphicon glyphicon-pushpin"></span>
                            <span><?= $value;?></span>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 button_div">
        <div class="col-sm-4 col-sm-offset-1">
            <?php 
                if($in_wishlist)
                {
                    $class="btn-danger remove_from_wishlist_btn";
                    $txt = "Remove from wishlist";
                }
                else
                {
                    $class="btn-info add_to_wishlist_btn";
                    $txt = "Add to wishlist";
                }
            ?>
            <button class="btn <?= $class;?>" rel="<?= $pg['id'];?>">
              <i class="fa fa-heart"></i> 
              <span class="btn_text"><?= $txt;?></span>
            </button>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <a href="user/schedule_visit?id=<?= $pg['id']?>">
                <button class="btn btn-success">
                    <span class="glyphicon glyphicon-time"></span>
                     Schedule Visit
                </button>
            </a>
        </div>
    </div>
</div>
<?php if($no <= 2):?>
    <style type="text/css">
        .sharing_tab a
        {
            padding: 0px !important;
        }
    </style>
<?php endif;?>