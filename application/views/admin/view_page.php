 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Pages</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-table"></i>Pages</li>
            <li><i class="fa fa-th-list"></i>View Pages</li>
          </ol>
        </div>
      </div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              All Page List
                          </header>
                          <?php if(isset($_GET['msg']) && !empty($_GET['msg']))
                          { ?> 
                          <div class="alert alert-danger" id="danger-alert">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Oop's! </strong>
                            one record deleted successfully.
                          </div>
                          <?php } ?>
                          <?php if(isset($_GET['status']) && $_GET['status']==1)
                          { ?> 
                          
                           <div class="alert alert-success" id="success-alert">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Success! </strong>
                            your page successfully published.
                          </div>
                          <?php } 
                          if(isset($_GET['status']) && $_GET['status']==0) {
                            ?>
                           <div class="alert alert-danger" id="danger-alert">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Oop's! </strong>
                            your page successfully unpublished.
                          </div>                          <?php 
                            } ?>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Page Title</th>
                                 <th><i class="icon_calendar"></i> Page Short Description</th>
                                 <th><i class="icon_mail_alt"></i> Page Image</th>
                                 <th><i class="icon_pin_alt"></i> Page Status</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                                <?php
                                
                               $query = $this->db->get('cms_pages');
                              $result = $query->result_array();
                              foreach ($result as $value) {
                                $id = $value['id'];
                                $status = $value['page_status'];
                              ?>
                              <tr>
                                 <td><?php echo $value['page_title'];?></td>
                                 <td><?php echo substr($value['page_short_description'],0,80).'....'?></td>
                                 <td><img src="<?php echo base_url();?>uploads/<?php echo $value['page_img']?>" width="50" height="50"></td>
                                 <td><a href="<?php echo base_url();?>Pages/change_status?status=<?php echo $status;?>&id=<?php echo $id?>"><?php if($value['page_status']==0){ echo 'unpublish'; } else { echo 'publish'; }?></a></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?php echo base_url();?>/admin/edit_page?edit_id=<?php echo $id?>"><i class="fa fa-pencil"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger delete" id="<?php echo $value['id']?>"href="<?php echo base_url();?>Pages/delete_page/<?php echo $id;?>" onclick="return confirm('Are you sure?')"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr> 
                              <?php } ?>                            
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      
      