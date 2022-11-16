<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center">Обратная связь</h1>
    <div class="row">
        <div class="d-flex justify-content-center">
            <form id="feedback_form" name="feedback" action="#">
                <div class="mb-3">
                    <label for="uname" class="form-label">Имя</label>
                    <input type="text" class="form-control" id="uname" name="uname" required pattern="[A-Za-zА-Яа-яЁё]{2,}">
                </div>
                <div class="mb-3">
                    <label for="uemail" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="uemail" name="uemail" required>
                </div>
                <div class="form-floating mb-3">
                    <span for="message" class="form-label d-inline-block">Ваш вопрос</span>
                    <textarea class="form-control" name="message" id="message" required"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" id="sfeedback">Отправить</button>
                <div id="result_message"></div>
            </form>
        </div>
    </div>


</div>
<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $("#feedback_form").submit(function (event) {
            event.preventDefault();
            let data = $(this).serialize();
            $.post( "form.php", data)
                .done(function( data ) {
                   $("#result_message").text(data);
                });
        })
    })
</script>
</body>
</html>