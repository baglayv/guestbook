<form role="form" id="contractForm">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="name" class="h4">Имя</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
        </div>
        <div class="form-group col-sm-6">
            <label for="email" class="h4">Email
                <span id ="errorEmail" class="d-none text-danger fs-6 "></span></label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
        </div>
    </div>
    <div class="form-group mt-2">
        <label for="message" class="h4 ">Сообщение</label>
        <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
    </div>
    <div class="d-grid gap-2 mt-2 d-md-flex justify-content-md-end">
        <button type="submit" id="form-submit" class="btn btn-success btn-lg ">Отправить</button>
    </div>
</form>


