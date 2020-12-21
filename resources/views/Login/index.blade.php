<form action="/postlogin" method="POST" class="user">
    {{ csrf_field() }}
    <div class="form-group">
        <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
      </div>
      <div class="form-group">
        <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
      </div>
      <button class="btn btn-primary btn-user btn-block"> Login </button>
</form>
<button><a href="/Register">Register Akun</a></button>