<?php require_once admin_view("static/header")?>
<?php require_once admin_view("static/main_navbar") ?>
<?php require_once admin_view("static/main_sidebar") ?>
<?php require_once admin_view("static/main_content") ?>
    <div class="row">

        <div class="col-lg-12 ">

            <!-- Left and right buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Üye bilgileri</h6>
                </div>
                <div class="font-italic font-size-lg text-success-100 text-center">
                     <?= isset($success) ? '<label> ' . $success . ' </label>'  : null; ?>
                </div>
                <div class="font-italic font-size-lg text-danger-100 text-center">
                    <?= isset($error) ? '<label>' . $error . '</label>' : null; ?>
                </div>
                <div class="card-body">
                    <form id="addUser" action="" method="post">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-4">Kullanıcı adı:</label>
                            <div class="col-lg-8">
                                <input  type="text" value="<?= post("userName") ? post("userName") : null; ?>" name="userName" class="form-control required" placeholder="Shoto5691">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-4">Şifre:</label>
                            <div class="col-lg-8">
                                <input  type="password" name="password" class="form-control required" placeholder="**********">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-4">Şifre tekrarı:</label>
                            <div class="col-lg-8">
                                <input type="password" name="password2" class="form-control required" placeholder="**********">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-4">Email:</label>
                            <div class="col-lg-8">
                                <input type="email" value="<?= post("email") ? post("email") : null; ?>" name="email" class="form-control required" placeholder="account@mail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Üye sınıfı</label>
                            <select name="user_status" class="form-control select-fixed-single select2-hidden-accessible" data-fouc="" data-select2-id="72" tabindex="-1" aria-hidden="true">
                                <optgroup selected label="Üye sınıfı seç" data-select2-id="205">
                                    <option <?= post("user_status") == 0 ? "selected" : null;?> value="0" >Üye</option>
                                    <option <?= post("user_status") == 1 ? "selected" : null;?> value="1" >Editör</option>
                                    <option <?= post("user_status") == 2 ? "selected" : null;?> value="2" >Admin</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-8 ml-lg-auto">
                                <div class="d-flex justify-content-lg-end align-items-center">
                                    <input type="hidden" name="submit" value="1">
                                    <button id="sendBtn" type="submit" class="btn btn-primary">Üye ekle<i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /left and right buttons -->

        </div>


        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Üye izinleri</h5>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Görüntüleme</label>
                        <select multiple="multiple" data-placeholder="Select a State..." class="form-control form-control-lg select" data-container-css-class="select-lg" data-fouc>
                            <option></option>
                            <optgroup label="Görüntüleme izinleri">
                                <option value="AZ" selected>Anasayfa</option>
                                <option value="CO" selected>Makaleler</option>
                                <option value="ID" selected>Ayalar</option>
                                <option value="WY" selected>Üyeler</option>
                                <option value="WY" selected>İletişim</option>
                                <option value="WY" selected>Hakkımda</option>
                                <option value="WY" selected>Forum</option>
                                <option value="WY" selected>Fotoğraflar</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Ekleme</label>
                        <select multiple="multiple" data-placeholder="Select a State..." class="form-control select" data-fouc>
                            <option></option>
                            <optgroup label="Ekleme İzinleri">
                                <option value="AZ" selected>Anasayfa</option>
                                <option value="CO" selected>Makaleler</option>
                                <option value="ID" selected>Ayalar</option>
                                <option value="WY" selected>Üyeler</option>
                                <option value="WY" selected>İletişim</option>
                                <option value="WY" selected>Hakkımda</option>
                                <option value="WY" selected>Forum</option>
                                <option value="WY" selected>Fotoğraflar</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Düzenleme</label>
                        <select multiple="multiple" data-placeholder="Select a State..." class="form-control select" data-fouc>
                            <option></option>
                            <optgroup label="Düzenleme izinleri">
                                <option value="AZ" selected>Anasayfa</option>
                                <option value="CO" selected>Makaleler</option>
                                <option value="ID" selected>Ayalar</option>
                                <option value="WY" selected>Üyeler</option>
                                <option value="WY" selected>İletişim</option>
                                <option value="WY" selected>Hakkımda</option>
                                <option value="WY" selected>Forum</option>
                                <option value="WY" selected>Fotoğraflar</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Silme</label>
                        <select multiple="multiple" data-placeholder="Select a State..." class="form-control form-control-sm select" data-container-css-class="select-sm" data-fouc>
                            <option></option>
                            <optgroup label="Silme izinleri">
                                <option value="AZ" selected>Anasayfa</option>
                                <option value="CO" selected>Makaleler</option>
                                <option value="ID" selected>Ayalar</option>
                                <option value="WY" selected>Üyeler</option>
                                <option value="WY" selected>İletişim</option>
                                <option value="WY" selected>Hakkımda</option>
                                <option value="WY" selected>Forum</option>
                                <option value="WY" selected>Fotoğraflar</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-8 ml-lg-auto">
                            <div class="d-flex justify-content-lg-end align-items-center">
                                <button id="edit" type="submit" class="btn btn-primary">Kaydet<i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const btn = document.getElementById("sendBtn");
        btn.addEventListener("click", (event)=> {
            const data = $("#addUser").serialize();
            $.post("api.php" , data , (response)=> {
            })
            event.preventDefault();
        })
    </script>


<?php require_once admin_view("static/footer") ?>