    <?php session_start();?>
    <div class="footer-nav-area" id="footerNav">
      <div class="container px-0">
        <!-- Paste your Footer Content from here-->
        <!-- Footer Content-->
        <div class="footer-nav position-relative">
          <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
            <li><a href="page-home/<?php echo $_SESSION['id'];?>"><i class="fa fa-home" style="font-size:1.4rem"> </i> <span>المخطط</span></a></li>
			<li><a href="page-day-tasks/<?php echo $_SESSION['id']?>"><i class="fa fa-list" style="font-size:1rem"> </i> <span>المهام اليومية</span></a></li>
			            <li><a href="page-tasks/<?php echo $_SESSION['id'];?>"><i class="fa fa-tasks" style="font-size:1rem"> </i> <span>المهام الفرعية</span></a></li>
						 <li><a href="page-main-tasks/<?php echo $_SESSION['id'];?>"><i class="fa fa-folder"style="font-size:1rem"> </i> <span>المهام الرئيسية</span></a></li>
            <li><a href="page-all/<?php echo $_SESSION['id'];?>"><i class="fa fa-window-restore"style="font-size:1rem"> </i> <span>المشاريع</span></a></li>
            <li><a href="category/<?php echo $_SESSION['id'];?>"><i class="fa fa-list-alt"style="font-size:1rem"> </i> <span>التصنيفات</span></a></li>



            

          </ul>
        </div>
      </div>
    </div>