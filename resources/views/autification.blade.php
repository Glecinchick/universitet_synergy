@extends('hophey')

@section('one_piece')Авторизация@endsection

@section('main_content')
    <div class="inline"><div class="email_field"><div class="form-item">
                <label for="email">E-mail</label><input onkeyup="ValidMail()" onclick="ValidMail()" onfocus="ValidMail();" autocomplete="off" tabindex="1" id="email" name="email" class="form-text" size="20" maxlength="400" type="text" value="" placeholder=""></div><div class="emailvalidation"></div><div class="form-item"><label for="password">
                    Пароль</label><input onkeyup="ValidMail()" onclick="ValidMail()" onfocus="ValidMail()" autocomplete="new-password" tabindex="2" id="password" name="password" class="form-password withIcon" size="20" maxlength="400" type="password" value=""><i class="icon eye eye-closed"></i></div><div class="row login-checkbox"><div class="checkbox inlinetop"><div class="form-item"><input tabindex="3" onclick="ValidMail()" onfocus="ValidMail()" id="remember_me" name="remember_me" class="form-checkbox" type="checkbox" value="1"><label for="remember_me" class="option"></label></div></div><div class="form_note inlinetop">Запомнить<br>меня</div></div><div class="form-item"><input id="g-recaptcha-response" name="g-recaptcha-response" class="form-text hidden" size="40" maxlength="400" type="text" value="" placeholder=""></div><div class="form-item"><input disabled="disabled" id="signup" name="signup" class="form-submit button" value="войти" type="submit"></div>
@endsection
