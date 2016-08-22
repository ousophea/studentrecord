<ul class="nav nav-list">
    <li class="active">
        <a href="<?php echo site_url(); ?>">
            <i class="icon-dashboard"></i>
            <span>ផ្ទាំង​កិច្ចការ</span>
        </a>
    </li>
    
      
    
    <li>
        <a href="<?php echo base_url(); ?>" class="dropdown-toggle">
            <i class="icon-group"></i>
            <span>អ្នកប្រើប្រាស់</span>

            <b class="arrow icon-angle-down"></b>
        </a>

        <ul class="submenu">
            <li>
                <a class="ajax" href="<?php echo base_url(); ?>users/add">
                    <i class="icon-double-angle-right"></i>
                    	បង្កើតអ្នកប្រើប្រាស់
                </a>
            </li>

            <li>
                <a class="ajax" href="<?php echo base_url(); ?>users/lists">
                    <i class="icon-th-list"></i>
                    	បង្ហាញ​អ្នកប្រើប្រាស់
                </a>
            </li>
        </ul>
    </li>

</li>
</ul><!--/.nav-list-->