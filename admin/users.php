<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-user.php">add user</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                          <tr>
                              <td class='id'>1</td>
                              <td>Nirob Hasan</td>
                              <td>Justnirob</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-user.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>2</td>
                              <td>Turza Poddar</td>
                              <td>Turza</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-user.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>3</td>
                              <td>Nahiyan Ahmed</td>
                              <td>Nahiyan</td>
                              <td>Moderator</td>
                              <td class='edit'><a href='update-user.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>4</td>
                              <td>Atik Shahriar</td>
                              <td>Atik</td>
                              <td>Moderator</td>
                              <td class='edit'><a href='update-user.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                      </tbody>
                  </table>
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
<?php include "header.php"; ?>
