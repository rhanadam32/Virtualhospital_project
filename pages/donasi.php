<!-- /.login-logo -->
<script src="admin/jsmod.js"></script>
<div class="container" style="width : 50%;">
    <div class="card card-outline card-purple">
        <div class="card-header text-center">
            <a href="#" class="h1"><b> Donasi</b></a>
            <p class='h6'>Jika Aplikasi ini terasa bermanfaat untuk orang lain , alangkah baiknya kita berdonasi! </p>
        </div>
        <div class="card-body">


            <form action="#" method="post" enctype="multipart/form-data">

                
            <div class="form-group">
                                <label for="exampleInputPassword1">Rekening / ATM</label>
                                <select name="rekening" class="form-control" id="rek">
                                    <option value="-">--pilih rekening--</option>
                                    <option value="-" data-norek='7201410376'>BSI</option>
                                    <option value="-" data-norek='6546-01-020066-53-5'>BRI</option>
                                </select>
                </div>
                <div class="form-group">
                                <input type="text" class="form-control" id="norek" name="saldo_awal" placeholder="Nomer Rekening" readonly />
                </div>
                <!-- /.col -->
                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" name="kirim" class="btn bg-purple" style="margin : 5px">Kirim</button>
                    <button type="reset" class="btn bg-blue " style="margin : 5px">Reset</button>

                </div>

                <!-- /.col -->
        </div>
        </form>


    </div>
    <!-- /.card-body -->
</div>
<script type="text/javascript">
            $('#rek').on('click', function() {
                const norek = $('#rek option:selected').data('norek');

                $('#norek').val(norek);
            });
</script>