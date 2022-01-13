<!-- start of footer -->
<footer class="container-fluid bg-info text-center p-2">
    <small class="text-white">Copyright &copy; 2022 || Designed By AeyBeri Tech ||<a href="#login" data-toggle="modal"
            data-target="#adminloginModal"> Admin Login</a></small>
  </footer>
  <!-- end of footer -->

  <!-- Start of Registration Form -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <i class="fas fa-user"></i><label for="name" class="pl-2 font-weight-bold">Name</label>
              <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Name">
            </div>
            <div class="form-group">
              <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">E-mail</label>
              <input type="email" class="form-control" id="stuemail" name="stuname" placeholder="Email">
              <small class="form-text">we'll never share your email with anyone else</small>
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i><label for="password" class="pl-2 font-weight-bold">New Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="addStu()">Sign Up</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Registration Form -->

  <!-- Start of Log-in Form -->
  <div class="modal fade" id="adminloginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="stuLoginForm">
            <div class="form-group">
              <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">E-mail</label>
              <input type="email" class="form-control" id="stuLogemail" name="stuLogemail" placeholder="Email">
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i><label for="stuLogpassword" class="pl-2 font-weight-bold">New Password</label>
              <input type="password" class="form-control" id="stuLogpassword" name="stuLogpassword" placeholder="password">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Login Form -->

  <!-- Start Admin Login Modal -->
  <div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="adminModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminModalLabel">Admin Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="adminLoginForm">
            <div class="form-group">
              <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">E-mail</label>
              <input type="email" class="form-control" id="adminLogemail" name="adminLogemail" placeholder="Email">
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i><label for="adminLogpassword" class="pl-2 font-weight-bold">New Password</label>
              <input type="password" class="form-control" id="adminLogpassword" name="adminLogpassword" placeholder="password">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Admin Login Modal -->


  <script src="js/jqury.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>


  <script src="js/ajaxrequst.js"></script>
</body>

</html>