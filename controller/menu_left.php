<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../form/admin/index.php" class="brand-link">
    <img class="animation__shake" src="../../logo/1.png" alt="AdminLTELogo" height="40" width="40">
      <span class="brand-text font-weight-light">ກອງພັນ 203 </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="../../form/users/image/<?php echo $result['ps_img']; ?>" class="img-circle elevation-2" style="widht:80px; height:40px;">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php
      echo $_SESSION['fname']." ".$_SESSION['lname'];
    ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
      
       
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon ion-android-funnel"></i>
              <p>
                ຊັ້ນ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../../form/position/form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ບັນທືກ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../form/position/table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນ</p>
                </a>
              </li>
        
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon ion-android-pin"></i>
              <p>
                ຕຳແໜ່ງ-ໜ້າທີ່
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../form/duties/form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ບັນທືກ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../form/duties/table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນ</p>
                </a>
              </li>
           
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon ion-stats-bars"></i>
              <p>
                ສັງກັດ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../form/location/form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ບັນທືກ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../form/location/table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນ</p>
                </a>
              </li>
           
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon ion-ios-paper-outline"></i>
              <p>
                ປະຫວັດພະນັກງານ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../../form/history/form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ບັນທືກ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../form/history/table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນ</p>
                </a>
              </li>
           
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon ion-ios-home"></i>
              <p>
                ແຂວງ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../form/provinces/form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ບັນທືກ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../form/provinces/table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນ</p>
                </a>
              </li>
           
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon ion-ios-home-outline"></i>
              <p>
                ເມືອງ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../form/dristrict/form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ບັນທືກ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../form/dristrict/table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນ</p>
                </a>
              </li>
           
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon ion-home"></i>
              <p>
                ບ້ານ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../form/villages/form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ບັນທືກ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../form/villages/table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນ</p>
                </a>
              </li>
           
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon ion-ios-people"></i>
              <p>
                ພະນັກງານ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../form/users/form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ບັນທືກ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../form/users/table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນ</p>
                </a>
              </li>
           
            </ul>
          </li>

     
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>