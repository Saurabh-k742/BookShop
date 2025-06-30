<div class="page">
    <h1 class="heading">Login</h1>
   <form method="post" action="./server/requests.php">
        <div class="mb-3 col-6 offset-sm-3">
            <label for="email" class="form-label">User email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Enter user email">
        </div>

        <div class="mb-3 col-6 offset-sm-3">
            <label for="password" class="form-label">User password</label>
            <input type="password" name="password"class="form-control" id="password" placeholder="Enter user password">
        </div>

        <div class="mb-3 col-6 offset-sm-3">
             <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>