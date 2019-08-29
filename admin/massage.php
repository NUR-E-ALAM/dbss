<?php
require "database.php";
?>
 <div class="mail-option">
                  <div class="chk-all">
                    <div class="pull-left mail-checkbox">
                      <input type="checkbox" class="">
                    </div>
                    <div class="btn-group">
                      <a data-toggle="dropdown" href="#" class="btn mini all">
                        All
                        <i class="fa fa-angle-down "></i>
                        </a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> None</a></li>
                        <li><a href="#"> Read</a></li>
                        <li><a href="#"> Unread</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn-group">
                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                      <i class=" fa fa-refresh"></i>
                      </a>
                  </div>
                  <div class="btn-group hidden-phone">
                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                      More
                      <i class="fa fa-angle-down "></i>
                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                      Move to
                      <i class="fa fa-angle-down "></i>
                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                  <ul class="unstyled inbox-pagination">
                    <li><span>1-50 of 99</span></li>
                    <li>
                      <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                    </li>
                    <li>
                      <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                    </li>
                  </ul>
                </div>
<div class="table-inbox-wrap ">
                  <table class="table table-inbox table-hover">
                    <tbody>
                    <?php 
$selectname="select * from contact";
$result=$conn->query($selectname);
if ($result->num_rows > 0) {
    while ($row1=$result->fetch_assoc()) {
        ?>
        <tr class="unread">
                        <td class="inbox-small-cells">
                          <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        
                        <td class="view-message  dont-show"><a href="mail_view.php?id=<?php echo $row1['id'];?>"><?php echo $row1['name']; ?></a></td>
                        <td class="view-message "><a href="mail_view.php?id=<?php echo $row1['id'];?>"><?php echo $row1['subject']; ?></a></td>
                        <td class="view-message "><a href="mail_view.php?id=<?php echo $row1['id'];?>"><?php echo $row1['massage']; ?></a></td>
                        
                        <td class="view-message  text-right">08:10 AM</td>
                      </tr>
                      <?php
    }
    echo "</table>";
 }
?>
                      
                    </tbody>
                  </table>
                </div>
               