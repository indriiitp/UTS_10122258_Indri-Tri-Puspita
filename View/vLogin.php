<div class="modal fade" id="auth" tabindex="-1" aria-labelledby="authTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="authTitle"><i class="fa fa-lock text-warning"></i> Login Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    </li>
                </ul>
                <div class="tab-content py-3 px-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form action="Controller/cLoginAuth.php" method="post" name="loginAdmin">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="username"><i class="fa fa-user text-warning"></i> Username</label>
                                    <input type="text" class="form-control" placeholder="Masukan Username" name="username">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="password"><i class="fa fa-key text-warning"></i> Password</label>
                                    <input type="password" class="form-control" placeholder="Masukan Password" name="password">
                                </div>
                            </div><br>
                            <div class="row mb-3 textbirutua">
                                <div class="col-md-12 text-right">
                                    <button type="submit" name="btnLogin" value="LOGIN" class="btn btn-warning" style="margin-right:10px">Login </button>
                                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>