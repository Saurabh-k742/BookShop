<div class="page">
    <h1 class="heading">Sign Up</h1>
   <form method="post" action="./server/requests.php">
        <div class="mb-3 col-6 offset-sm-3">
            <label for="email" class="form-label">User email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Enter user email">
        </div>

        <div class="mb-3 col-6 offset-sm-3">
            <label for="name" class="form-label">User name</label>
            <input type="text" name="name"class="form-control" id="name" placeholder="Enter user name">
        </div>

        <div class="mb-3 col-6 offset-sm-3">
            <label for="password" class="form-label">User password</label>
            <input type="password" name="password"class="form-control" id="password" placeholder="Enter user password">
        </div>

        <div class="mb-3 col-6 offset-sm-3">
            <label for="c_password" class="form-label">Confirm password</label>
            <input type="password" name="c_password"class="form-control" id="c_password" placeholder="Confirm password">
        </div>

        <div class="mb-3 col-6 offset-sm-3">
            <label for="address" class="form-label">User address</label>
            <input type="text" name="address"class="form-control" id="address" placeholder="Enter user address">
        </div>

        <div class="mb-3 col-6 offset-sm-3">
             <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
        </div>
    </form>
</div>