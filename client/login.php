<div class="container offset-sm-3">
    <div class="offset-sm-3">
        <h1 class="margin-bottom-15">Login</h1>
    </div>
    <form action="./server/requests.php" method="post">
        <div class="margin-bottom-15 col-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="margin-bottom-15 col-6">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" placeholder="Enter your password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
</div>