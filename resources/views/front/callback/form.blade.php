<!--      Наша форма зворотнього зв язку      -->
<label>Имя: </label><br>
<input type="text"  placeholder=" Введите ваше имя " name="name" required><br>
<label>Телефон: </label><br>
<input type="tel" placeholder=" +38 (___) ___ __ __ " minlength="13" maxlength="13" name="phone" pattern="^[ 0-9]+$" required><br>
<label>Email: </label><br>
<input type="email"  placeholder=" qwerty@gmail.com " name="email" required><br>
<label>Ваш вопрос: </label><br>
<textarea name="msg"  placeholder=" Текст сообщения " cols="30" rows="5" required></textarea><br>

<div class="g-recaptcha" data-sitekey="6LdSzmsUAAAAAAj9h8NvT4O1c0dL4aM5hZR0z2-4"></div>

<input class="btn btn-dark"  type="submit" value="Отправить" >