<?php 
  include 'includes/header.php';  
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Sign up</h1>
            <p>Fill in the form to become a member and start creating posts.</p>
            <form class="form-horizontal" action="createuser.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Name:</label>
                <div class="col-sm-10">
                <input type="text" required class="form-control" name="name" placeholder="Enter name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10"> 
                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="password">Confirm Password:</label>
                <div class="col-sm-10"> 
                <input type="password" class="form-control" id="password2" name="password2" required placeholder="Enter password">
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="signup">Submit</button>
                </div>
            </div>
            </form>
        </div>
        
    </div>
</div>

<?php 
  include 'includes/footer.php';
?>

