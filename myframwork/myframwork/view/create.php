<?php include __Dir__ . '/layout/head.php'; ?>
<?php
if(isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}
?>
<script>
    var msg_state = '<?= $_SESSION['flash_message'] ?>';
    var msg = "<?= $message ?>";
    if(msg_state != ''){
        alert(msg);
    }
</script>
<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>앨범 생성</h2>
        </div>

        <div class="row g-5" style="justify-content: space-evenly;">

            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3"></h4>
                <form class="needs-validation" action="/Album/store" method="post" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">앨범명</label>
                            <input type="text" class="form-control" name="Album_Name" id="Album_Name" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">아티스트명</label>
                            <input type="text" class="form-control" name="Artist_Name" id="Artist_Name" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>


                    </div>



                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">앨범 생성하기</button>
                </form>
            </div>
        </div>
    </main>
</div>

<?php include __Dir__ . '/layout/footer.php'; ?>
