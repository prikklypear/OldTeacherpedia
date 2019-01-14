<p>Hi Steven!!! :D xx</p>

<form action="user/register/submit-register.php" method="post">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-10">
            <input name="first_name" class="form-control" type="text" placeholder="First Name" />
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
            <input name="second_name" class="form-control" type="text" placeholder="Second Name" />
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input name="email" class="form-control" type="email" placeholder="Email address" />
        </div>   
    </div>`
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input id="password" name="password" class="form-control" type="password" placeholder="Password" />
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date of Birth</label>
        <div class="col-sm-10">
            <input name="date_of_birth" class="form-control" type="date" placeholder="dd-mm-yy" />
        </div>
    </div>
    <div class="form-group row">
            <button type="submit" class="btn btn-default" id="submit-registration">Register</button>
    </div>
</form>