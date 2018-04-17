  <!-- Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:30px 40px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-size: largE; font-family: 'Josefin Sans', sans-serif;"><span class="glyphicon glyphicon-log-in"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 20px;">
          <form class="fform" action="login.php" method="post">
            <fieldset>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" autofocus class="form-control" id="email" placeholder="Enter email" name="email" required>
              </div>

              <div class="form-group">
                <label for="pwd">Password:</label>
                <input class="form-control" name="pwd" placeholder="Enter password" type="password"/>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block"> Login</button>
              </div>
              or a<a href="/register.php"> new user</a>
            </fieldset>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-defaul" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>