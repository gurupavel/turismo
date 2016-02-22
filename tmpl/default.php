<div id="connect_form">
    <form method="POST">
        <legend><?=$params['title']?></legend>
        
        <input type="text" name="feedback_name" class="input-block-level" placeholder="Ваше имя" required='required' />
        <input type="text" name="feedback_phone" class="input-block-level" placeholder="Номер телефона" required='required' />
        <input type="text" name="feedback_adress" class="input-block-level" placeholder="Адрес (улица, дом)" required='required' />
        
        <input type="submit" value="Подключиться" name="mod_img_joomshoping_submitted" class="btn btn-large btn-block btn-info" />

    </form>
</div>


<div id="test_form">
    <form method="POST">
        <legend><?=$params['title']?></legend>
        <input type="submit" value="DB request" name="mod_img_joomshoping_db_request" class="btn btn-large btn-block btn-info" />

    </form>
</div>