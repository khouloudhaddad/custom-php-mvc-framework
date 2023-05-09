<h3 class="mb-3">Create a new account</h3>
<form action="/register" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" id="firsname" name="firsname">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="subject" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
