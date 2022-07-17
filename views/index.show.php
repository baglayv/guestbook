<!doctype html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
<div class="row m-3">
    <h2>Добавить запись в гостевую книгу</h2>
    <?php require "form.show.php" ?>

    <?php foreach ($getMessages as $message): ?>
        <div class="mb-3">
            <div><?= $message['name']; ?>, <?= $message['email']; ?></div>
            <div class="fs-6"><?= $message['dtime']; ?></div>
            <div class="border"><?= $message['body']; ?></div>
        </div>
    <?php endforeach; ?>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#contractForm').submit(function (e) {
            e.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();
            $.ajax({
                type: "POST",
                url: 'store.php',
                data: "name=" + name + "&email=" + email + "&message=" + message,
                success: function (text) {
                    if (text != '') {
                        $("#errorEmail").removeClass("d-none");
                        $("#errorEmail").html(text);
                    } else {
                        location.href = '/';


                    }

                }
            });
        });
    });
</script>
</body>
</html>