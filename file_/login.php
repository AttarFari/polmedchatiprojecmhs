<?php include './_partials/_template/header.php';?>

<form class="border border-2 p-3 w-50 mt-5 mx-auto rounded-3 bg-secondary">
    <h2 class="text-center fw-bold my-3">Login</h2>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputtext" aria-describedby="emailHelp" placeholder="Masukan Username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
  </div>
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>