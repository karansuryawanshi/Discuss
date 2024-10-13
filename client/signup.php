<div class="container offset-sm-3">
    <div class="offset-sm-3">
        <h1 class="margin-bottom-15">Signup</h1>
    </div>
    <form method="post" action="./server/requests.php">
        <div class="margin-bottom-15 col-6">
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username" class="form-control" placeholder="Enter User Name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="margin-bottom-15 col-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="margin-bottom-15 col-6">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" placeholder="Enter your password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="margin-bottom-15 col-6">
            <label for="exampleInputPassword1" class="form-label">User Address</label>
            <input type="text" name="address" placeholder="Enter your Address" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
    </form>
</div>